
@extends('layouts.app')

@section('title', "Détails de l'Élève")
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Informations de l'Élève</h1>
    <div class="bg-gray-900 shadow-lg rounded-lg p-6 mb-4">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4">{{ $eleve->nom }} {{ $eleve->prenom }}</h2>
        <div class="space-y-4">
            <p class="text-xl text-gray-400"><strong>Nom:</strong> {{ $eleve->nom }}</p>
            <p class="text-xl text-gray-400"><strong>Prénom:</strong> {{ $eleve->prenom }}</p>
            <p class="text-xl text-gray-400"><strong>Email:</strong> {{ $eleve->email }}</p>
            <p class="text-xl text-gray-400"><strong>Année Scolaire:</strong> {{ $eleve->annee_scolaire }}</p>
        </div>
        <div class="mt-6 flex justify-end">
            <a href="{{ route('eleves.edit', $eleve->id) }}" 
               class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-lg shadow-lg">
               Modifier
            </a>
        </div>
    </div>
</div>
@endsection
