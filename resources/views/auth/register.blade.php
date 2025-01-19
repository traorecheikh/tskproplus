@extends('layouts.app')

@section('content')
    <div class="auth-box">
        <!-- Formulaire d'Inscription -->
        <div class="auth-header">
            <h3 class="mb-0">Créer un Compte</h3>
            <p class="mb-0">Rejoignez ProjectFlow aujourd'hui</p>
        </div>
        <div class="auth-form">
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

            <!-- Display Success Message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('user.register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="lname" class="form-control @error('name') is-invalid @enderror" placeholder="Nom Complet" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse Email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="text" name="fname" class="form-control" placeholder="fname" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
            </form>
            <div class="auth-switch">
                Déjà un compte ? <a href="{{ route('user.login') }}">Connectez-vous maintenant</a>
            </div>
        </div>
    </div>
@endsection
