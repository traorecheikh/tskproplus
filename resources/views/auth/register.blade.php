<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJxTDR4pOlSgmZ3vyaLfX7nkq6aYqrqzjD8W9XZGVYQ9l8Fkp0y5kDGl7ryu" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Inscription</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('user.register')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="fname" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="fname" name="fname" required>
                        </div>
                        <div class="mb-3">
                            <label for="lname" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lname" name="lname" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                            <a href="/login" class="btn btn-link">Déjà un compte ? Connectez-vous</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0+0vYYftqgDlXHnkVXrdi/gz5QhpF9ndQSOv8YYFgSZWAvpI" crossorigin="anonymous"></script>

</body>

</html>
