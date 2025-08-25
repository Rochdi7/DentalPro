@extends('layouts.AuthLayout')

@section('title', 'Connexion')

@section('auth-v2', '')

@section('content')
    <div class="auth-form">
        <div class="card my-5 mx-3">
            <div class="card-body">
                <h4 class="f-w-500 mb-1">Connectez-vous avec votre adresse e-mail</h4>
                <p class="mb-3">
                    Si vous n'avez pas de compte, veuillez contacter <strong>Code Sommet</strong>.
                </p>

                {{-- Affichage des erreurs globales (optionnel) --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Adresse e-mail" />
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="floatingInput1" name="password" required autocomplete="current-password"
                            placeholder="Mot de passe" />
                        @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="d-flex mt-1 justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input input-primary" type="checkbox" id="remember" name="remember"
                                {{ old('remember') ? 'checked' : '' }} />
                            <label class="form-check-label text-muted" for="remember">Se souvenir de moi ?</label>
                        </div>
                        <a href="{{ route('password.request') }}">
                            <h6 class="text-secondary f-w-400 mb-0">Mot de passe oublié ?</h6>
                        </a>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">
                            Connexion
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
