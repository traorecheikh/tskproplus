<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectFlow - Gestion de Projets d'Entreprise</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }

        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            color: white !important;
        }

        .auth-container {
            margin-top: 2rem;
            padding: 2rem;
        }

        .auth-box {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            position: relative;
        }

        .auth-header {
            background: var(--primary-color);
            color: white;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .auth-form {
            padding: 2rem;
        }

        .form-control {
            border-radius: 8px;
            padding: 0.8rem;
            border: 1px solid #dee2e6;
            margin-bottom: 1rem;
        }

        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .btn-primary {
            background-color: var(--secondary-color);
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .auth-switch {
            text-align: center;
            margin-top: 1rem;
            color: #666;
        }

        .auth-switch a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-switch a:hover {
            color: #2980b9;
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-project-diagram me-2"></i>
            ProjectFlow
        </a>
    </div>
</nav>

<!-- Contenu Principal -->
<div class="container auth-container">
    <div class="row">
        <!-- Colonne Gauche - Fonctionnalités -->
        <div class="col-lg-6 mb-4">
            <div class="text-center p-4">
                <h2 class="mb-4">Gestion de Projets d'Entreprise</h2>
                <div class="row mt-5">
                    <div class="col-md-6 mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h5>Gestion des Tâches</h5>
                        <p>Créez et assignez des tâches efficacement</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>Collaboration d'Équipe</h5>
                        <p>Travaillez ensemble sans effort</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Suivi de Progression</h5>
                        <p>Surveillez l'avancement en temps réel</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Gestion du Temps</h5>
                        <p>Gardez vos projets dans les délais</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne Droite - Formulaires de Connexion et d'Inscription -->
        <div class="col-lg-6">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
