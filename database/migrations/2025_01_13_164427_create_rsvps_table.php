<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rsvps', function (Blueprint $table) {
            $table->id(); // ID-ul RSVP-ului
            $table->boolean('prezenta'); // Da/Nu pentru participare
            $table->string('nume'); // Numele persoanei
            $table->integer('persoane')->nullable(); // Număr de persoane
            $table->integer('copii')->nullable(); // Număr de copii
            $table->text('mesaj')->nullable(); // Mesaj suplimentar
            $table->timestamps(); // created_at și updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rsvps');
    }
};
