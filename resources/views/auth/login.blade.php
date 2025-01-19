@extends('layouts.app')

@section('content')
    <div class="auth-box">
        <!-- Formulaire de Connexion -->
        <div class="auth-header">
            <h3 class="mb-0">Bon Retour</h3>
            <p class="mb-0">Connectez-vous à votre compte</p>
        </div>
        <div class="auth-form">
            <!-- Display Success Message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user.login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse Email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Se Connecter</button>
                </div>
            </form>
            <div class="auth-switch">
                Pas encore de compte ? <a href="{{ route('user.register') }}">Inscrivez-vous maintenant</a>
            </div>
        </div>
    </div>
@endsection
