<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjectFlow - Tableau de Bord</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --success-color: #2ecc71;
            --warning-color: #f1c40f;
            --sidebar-width: 250px;
        }

        body {
            background: #f8f9fa;
            min-height: 100vh;
        }

        .sidebar {
            width: var(--sidebar-width);
            background: var(--primary-color);
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 1rem;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }

        .sidebar-brand {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            padding: 1rem 1.5rem;
            display: block;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin-top: 2rem;
        }

        .sidebar-menu li a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            display: block;
            transition: all 0.3s;
        }

        .sidebar-menu li a:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .sidebar-menu li a i {
            margin-right: 0.8rem;
            width: 20px;
            text-align: center;
        }

        .top-bar {
            background: white;
            padding: 1rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .project-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .progress {
            height: 8px;
        }

        .task-item {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 0.5rem;
            border-left: 4px solid var(--secondary-color);
        }

        .priority-high {
            border-left-color: var(--accent-color);
        }

        .priority-medium {
            border-left-color: var(--warning-color);
        }

        .priority-low {
            border-left-color: var(--success-color);
        }

        .avatar-stack {
            display: flex;
            margin-right: 1rem;
        }

        .avatar-stack img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 2px solid white;
            margin-left: -8px;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<!-- Sidebar -->
<div class="sidebar">
    <a href="/dashboard" class="sidebar-brand">
        <i class="fas fa-project-diagram me-2"></i>
        ProjectFlow
    </a>
    <ul class="sidebar-menu">
        <li><a href="/dashboard"><i class="fas fa-home"></i> Tableau de bord</a></li>
        <li><a href="/projects"><i class="fas fa-tasks"></i> Mes Projets</a></li>
        <li><a href="/calendar"><i class="fas fa-calendar"></i> Calendrier</a></li>
        <li><a href="/team"><i class="fas fa-users"></i> Équipe</a></li>
        <li><a href="/reports"><i class="fas fa-chart-bar"></i> Rapports</a></li>
        <li><a href="/settings"><i class="fas fa-cog"></i> Paramètres</a></li>
    </ul>
</div>

<!-- Main Content -->
<div class="main-content">
    <!-- Top Bar -->
    <div class="top-bar d-flex justify-content-between align-items-center">
        <div class="search-bar">
            <input type="text" class="form-control w-100" placeholder="Rechercher...">
        </div>
        <div class="d-flex align-items-center">
            <div class="position-relative me-4">
                <i class="fas fa-bell fa-lg"></i>
                <span class="notification-badge">3</span>
            </div>
            <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle">
        </div>
    </div>

    <!-- Stats Row -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon text-primary">
                    <i class="fas fa-folder"></i>
                </div>
                <h3>{{auth()->user()->projects()->count()}}</h3>
                <p class="text-muted mb-0">Projets Actifs</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon text-success">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>85%</h3>
                <p class="text-muted mb-0">Taux de Complétion</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon text-warning">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>{{auth()->user()->pendingTasks()->count()}}</h3>
                <p class="text-muted mb-0">Tâches en Attente</p>

            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-icon text-danger">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <h3>{{auth()->user()->pendingTasks()->count()}}</h3>
                <p class="text-muted mb-0">Tâches Urgentes</p>
            </div>
        </div>
    </div>

    <!-- Projects and Tasks -->
    <div class="row">
        <!-- Projects Column -->
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Projets en Cours</h4>
                <button class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Nouveau Projet
                </button>
            </div>

            <!-- Project Cards -->
            <div class="project-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Refonte du Site Web</h5>
                    <span class="badge bg-primary">En Cours</span>
                </div>
                <p class="text-muted">Modernisation complète du site web de l'entreprise</p>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="avatar-stack">
                        <img src="https://via.placeholder.com/32" alt="Member 1">
                        <img src="https://via.placeholder.com/32" alt="Member 2">
                        <img src="https://via.placeholder.com/32" alt="Member 3">
                    </div>
                    <span class="text-muted">Échéance: 15 Mars</span>
                </div>
            </div>

            <div class="project-card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Application Mobile</h5>
                    <span class="badge bg-warning">En Attente</span>
                </div>
                <p class="text-muted">Développement de l'application mobile client</p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="avatar-stack">
                        <img src="https://via.placeholder.com/32" alt="Member 1">
                        <img src="https://via.placeholder.com/32" alt="Member 2">
                    </div>
                    <span class="text-muted">Échéance: 30 Mars</span>
                </div>
            </div>
        </div>

        <!-- Tasks Column -->
        <div class="col-lg-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Tâches Urgentes</h4>
                <button class="btn btn-outline-primary btn-sm">Voir Tout</button>
            </div>

            <div class="task-item priority-high">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0">Correction Bug Critique</h6>
                    <span class="badge bg-danger">Urgent</span>
                </div>
                <p class="text-muted mb-0">Fixer le bug sur la page d'accueil avant minuit</p>
            </div>

            <div class="task-item priority-medium">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0">Mise à jour Base de Données</h6>
                    <span class="badge bg-warning">Moyenne</span>
                </div>
                <p class="text-muted mb-0">Vérifier les entrées de la base de données</p>
            </div>

            <div class="task-item priority-low">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0">Planification Réunion</h6>
                    <span class="badge bg-success">Faible</span>
                </div>
                <p class="text-muted mb-0">Organiser la réunion de l'équipe pour la semaine prochaine</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
