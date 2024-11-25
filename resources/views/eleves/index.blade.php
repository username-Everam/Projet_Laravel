<!DOCTYPE html>
<html>
<head>
    <title>Liste des élèves</title>
</head>
<body>
    <button><a href="{{ route('eleves.create') }}">Ajouter un élève</a></button>
    <h1>Liste des élèves</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Numéro étudiant</th>
                <th>Date de naissance</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eleves as $eleve)
                <tr>
                    <td>{{ $eleve->id }}</td>
                    <td>{{ $eleve->nom }}</td>
                    <td>{{ $eleve->email }}</td>
                    <td>{{ $eleve->num_etudiant }}</td>
                    <td>{{ $eleve->date_Naissance }}</td>
                    <td>{{ $eleve->image }}</td>
                    <td>
                        <a href="{{ route('eleves.edit', $eleve->id) }}">Modifier</a>
                    </td>
                    <td>
                        <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>