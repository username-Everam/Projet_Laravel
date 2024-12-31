
@extends('layouts.app')

@section('title', 'Modifier un Élève')
@section('content')
<div class="max-w-2xl mx-auto bg-gray-900 shadow-lg rounded-lg p-6 mt-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Modifier les Informations de l'Élève</h1>
    <form action="{{ route('eleves.update', $eleve) }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')
        <!-- Nom de l'élève -->
        <div class="flex flex-col">
            <label for="nom" class="mb-2 text-sm font-semibold text-gray-400">Nom de l'Élève</label>
            <input type="text" id="nom" name="nom" value="{{ $eleve->nom }}" 
                class="border border-gray-700 rounded-md p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                required>
        </div>
        <!-- Prénom de l'élève -->
        <div class="flex flex-col">
            <label for="prenom" class="mb-2 text-sm font-semibold text-gray-400">Prénom de l'Élève</label>
            <input type="text" id="prenom" name="prenom" value="{{ $eleve->prenom }}" 
                class="border border-gray-700 rounded-md p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                required>
        </div>
        <!-- Email de l'élève -->
        <div class="flex flex-col">
            <label for="email" class="mb-2 text-sm font-semibold text-gray-400">Email</label>
            <input type="email" id="email" name="email" value="{{ $eleve->email }}" 
                class="border border-gray-700 rounded-md p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                required>
        </div>
        <!-- Année scolaire -->
        <div class="flex flex-col">
            <label for="annee_scolaire" class="mb-2 text-sm font-semibold text-gray-400">Année Scolaire</label>
            <input type="text" id="annee_scolaire" name="annee_scolaire" value="{{ $eleve->annee_scolaire }}" 
                class="border border-gray-700 rounded-md p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                required>
        </div>
        <!-- Boutons -->
        <div class="flex justify-between items-center">
            <button type="reset" 
                class="px-6 py-3 rounded-md bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold">Réinitialiser</button>
            <button type="submit" 
                class="px-6 py-3 rounded-md bg-blue-500 hover:bg-blue-600 text-white font-semibold shadow-lg">Mettre à jour</button>
        </div>
    </form>
</div>
@endsection
