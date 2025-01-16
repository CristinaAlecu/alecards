@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifică adresa de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nou link de verificare a fost trimis către adresa de email.') }}
                        </div>
                    @endif

                    {{ __('Înainte de a continua, verifica dacă ai primit mail de verificare.') }}
                    {{ __('Dacă nu l-ai primit') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('apasă aici pentru a retrimite') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
