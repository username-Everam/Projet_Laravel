@extends('layouts.app')

@section('content')
<?php
    $eleve = App\Models\Eleves::find(request()->route('eleve'));
?>
<button><a href="{{ route('eleves.index') }}">Retour</a></button>
<div class="container">
    <h2>Modifier un élève</h2>
    <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $eleve->nom }}" required>
        </div>
        
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $eleve->prenom }}" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $eleve->email }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
@endsection 