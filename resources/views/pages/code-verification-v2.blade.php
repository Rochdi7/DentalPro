@extends('layouts.AuthLayout')

@section('title', 'Vérification du code')

@section('auth-v2', 'yes')

@section('content')
    <div class="auth-form">
        <div class="card my-5 mx-3">
            <div class="card-body">

                <h4 class="f-w-500 mb-1">Veuillez confirmer votre adresse e-mail</h4>

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        Un nouveau lien de vérification a été envoyé à votre adresse e-mail.
                    </div>
                @endif

                <p class="mb-0">Avant de continuer, veuillez vérifier votre boîte de réception pour cliquer sur le lien de confirmation.</p>
                <p class="mb-3">Vous n'avez pas reçu l'e-mail ?
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link link-primary p-0 m-0 align-baseline">Renvoyer le lien</button>
                    </form>
                </p>

                {{-- Optional: Display current user email --}}
                <p class="text-muted mb-1"><small>Envoyé à : <strong>{{ Auth::user()->email }}</strong></small></p>

                {{-- Optional design: 4 digit input as placeholder (not functional unless OTP is implemented) --}}
                <div class="row my-4 text-center">
                    <div class="col">
                        <input type="text" class="form-control text-center" placeholder="0" disabled />
                    </div>
                    <div class="col">
                        <input type="text" class="form-control text-center" placeholder="0" disabled />
                    </div>
                    <div class="col">
                        <input type="text" class="form-control text-center" placeholder="0" disabled />
                    </div>
                    <div class="col">
                        <input type="text" class="form-control text-center" placeholder="0" disabled />
                    </div>
                </div>

                <div class="d-grid mt-4">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Retour</a>
                </div>

            </div>
        </div>
    </div>
@endsection
