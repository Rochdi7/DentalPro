@extends('layouts.AuthLayout')

@section('title', 'Réinitialiser le mot de passe')

@section('auth-v2', '')

@section('content')
    <div class="auth-form">
        <div class="card my-5 mx-3">
            <div class="card-body">
                <h4 class="f-w-500 mb-1">Réinitialiser le mot de passe</h4>
                <p class="mb-3">
                    Retour à <a href="{{ route('login') }}" class="link-primary">Connexion</a>
                </p>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    {{-- Jeton requis depuis le lien de réinitialisation --}}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label class="form-label">Adresse e-mail</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ $email ?? old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            placeholder="Adresse e-mail"
                        >
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nouveau mot de passe</label>
                        <input
                            type="password"
                            name="password"
                            id="floatingInput"
                            class="form-control @error('password') is-invalid @enderror"
                            required
                            autocomplete="new-password"
                            placeholder="Mot de passe"
                        >
                        @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirmer le mot de passe</label>
                        <input
                            type="password"
                            name="password_confirmation"
                            id="floatingInput1"
                            class="form-control"
                            required
                            autocomplete="new-password"
                            placeholder="Confirmer le mot de passe"
                        >
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">Réinitialiser le mot de passe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
