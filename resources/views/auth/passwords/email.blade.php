@extends('layouts.AuthLayout')

@section('title', 'Mot de passe oublié')

@section('auth-v2', 'yes')

@section('content')
    <div class="auth-form">
        <div class="card my-5 mx-3">
            <div class="card-body">
                <h4 class="f-w-500 mb-1">Mot de passe oublié</h4>
                <p class="mb-3">
                    Retour à
                    <a href="{{ route('login') }}" class="link-primary">Connexion</a>
                </p>

                {{-- Message de succès après l'envoi de l'e-mail --}}
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Adresse e-mail</label>
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="floatingInput"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            placeholder="Adresse e-mail"
                        />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-primary">Envoyer l'e-mail de réinitialisation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
