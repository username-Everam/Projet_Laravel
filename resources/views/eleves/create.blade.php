<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un élève</title>
</head>
<body>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
        }
    </style>
    <button><a href="{{ route('eleves.index') }}">Retour</a></button>
    <div class="container">
        <h1>Ajouter un élève</h1>
        <form action="{{ route('eleves.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date_Naissance">Date de Naissance:</label>
                <input type="date" id="date_Naissance" name="date_Naissance" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="num_etudiant">Numéro étudiant:</label>
                <input type="text" id="num_etudiant" name="num_etudiant" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</body>
</html>