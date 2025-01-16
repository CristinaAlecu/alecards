<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;
use Illuminate\Support\Facades\Mail;
use App\Mail\RSVPNotification;
use Illuminate\Support\Facades\RateLimiter;

class InvitationController extends Controller
{
    // Afișează invitația
    public function index()
    {
        return view('invitation.florin&gabriela');
    }

    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('role:admin')->only('admin');
        $this->middleware('throttle:10,1')->only('storeRsvp');
    }

    // Salvează RSVP-ul
    public function storeRsvp(Request $request)
    {
        // Verifică dacă utilizatorul a făcut prea multe cereri
        if (RateLimiter::tooManyAttempts('rsvp-store', 5)) {
            return response('Too many requests. Please try again later.', 429);
        }

        // Înregistrează o cerere (incrementare contor)
        RateLimiter::hit('rsvp-store', 60); // 5 încercări pe minut

        // Validează input-ul utilizatorului
        $validated = $request->validate([
            'prezenta' => 'required|in:0,1',
            'nume' => 'required|string|max:255',
            'persoane' => 'nullable|integer',
            'copii' => 'nullable|integer',
            'mesaj' => 'nullable|string|max:500',
        ]);

        // Salvare RSVP în baza de date (opțional)
        Rsvp::create($validated);

        // Detalii pentru email
        $details = [
            'nume' => $validated['nume'],
            'prezenta' => $validated['prezenta'],
            'persoane' => $validated['persoane'] ?? 0,
            'copii' => $validated['copii'] ?? 0,
            'mesaj' => $validated['mesaj'] ?? 'Fără mesaj',
        ];

        // Trimiterea email-ului
        Mail::to(env('RSVP_EMAIL'))->send(new RSVPNotification($details));

        // Redirect cu mesaj de succes
        return redirect()->route('invitation.index')->with('success', 'Îți mulțumim! Confirmarea ta a fost trimisă cu succes!');
    }

    // Afișează RSVP-urile (admin)
    public function admin()
    {
        $rsvps = Rsvp::all();
        return view('invitation.admin', compact('rsvps'));
    }
}
