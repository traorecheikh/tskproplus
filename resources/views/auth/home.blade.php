<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJxTDR4pOlSgmZ3vyaLfX7nkq6aYqrqzjD8W9XZGVYQ9l8Fkp0y5kDGl7ryu" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5">
    <!-- Header -->
    <div class="row justify-content-between">
        <div class="col-md-8">
            <h1>Bienvenue sur votre tableau de bord</h1>
            <p>Gérez vos projets et tâches.</p>
        </div>
        <div class="col-md-4 text-end">
            <a href="/logout" class="btn btn-danger">Déconnexion</a>
        </div>
    </div>

    <!-- Liste des projets -->
    <div class="row mt-4">
        <div class="col-md-12">
            <h3>Projets</h3>
            <a href="/add-project" class="btn btn-success mb-3">Ajouter un projet</a>
            <div class="list-group">
                <!-- Projet Exemple -->
                <div class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>Projet 1</h5>
                            <p>Description du projet 1...</p>
                        </div>
                        <div>
                            <a href="/edit-project/1" class="btn btn-warning btn-sm">Modifier</a>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProjectModal" data-project-id="1">Supprimer</button>
                        </div>
                    </div>

                    <!-- Liste des tâches pour ce projet -->
                    <h6 class="mt-3">Tâches</h6>
                    <div class="list-group">
                        <!-- Tâche Exemple -->
                        <div class="list-group-item d-flex justify-content-between">
                            <div>
                                <h6>Tâche 1</h6>
                                <p>Description de la tâche 1...</p>
                            </div>
                            <div>
                                <a href="/edit-task/1" class="btn btn-warning btn-sm">Modifier</a>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteTaskModal" data-task-id="1">Supprimer</button>
                            </div>
                        </div>
                        <!-- Fin Tâche Exemple -->
                    </div>
                </div>
                <!-- Fin Projet Exemple -->
            </div>
        </div>
    </div>

    <!-- Modal de suppression de projet -->
    <div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProjectModalLabel">Supprimer le projet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer ce projet ? Cela supprimera également toutes les tâches associées.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteProjectBtn">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de suppression de tâche -->
    <div class="modal fade" id="deleteTaskModal" tabindex="-1" aria-labelledby="deleteTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteTaskModalLabel">Supprimer la tâche</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer cette tâche ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteTaskBtn">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0+0vYYftqgDlXHnkVXrdi/gz5QhpF9ndQSOv8YYFgSZWAvpI" crossorigin="anonymous"></script>

<script>
    // Fonction pour gérer la suppression de projet
    const deleteProjectModal = document.getElementById('deleteProjectModal');
    const confirmDeleteProjectBtn = document.getElementById('confirmDeleteProjectBtn');

    deleteProjectModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const projectId = button.getAttribute('data-project-id');
        confirmDeleteProjectBtn.onclick = function() {
            window.location.href = '/delete-project/' + projectId; // Redirection vers la route de suppression du projet
        }
    });

    // Fonction pour gérer la suppression de tâche
    const deleteTaskModal = document.getElementById('deleteTaskModal');
    const confirmDeleteTaskBtn = document.getElementById('confirmDeleteTaskBtn');

    deleteTaskModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const taskId = button.getAttribute('data-task-id');
        confirmDeleteTaskBtn.onclick = function() {
            window.location.href = '/delete-task/' + taskId; // Redirection vers la route de suppression de tâche
        }
    });
</script>

</body>

</html>
