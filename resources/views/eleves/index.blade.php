
@extends('layouts.app')

@section('title', 'Liste des Élèves')
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Liste des Élèves</h1>
    <div class="flex justify-between items-center mb-4">
        <a href="{{ route('eleves.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg">
            Ajouter un Élève
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($eleves as $eleve)
        <div class="bg-gray-900 p-5 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-300">{{ $eleve->nom }} {{ $eleve->prenom }}</h2>
            <p class="text-gray-500">Email: {{ $eleve->email }}</p>
            <p class="text-gray-500">Année: {{ $eleve->annee_scolaire }}</p>
            <div class="mt-4">
                <a href="{{ route('eleves.edit', $eleve->id) }}" 
                   class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full shadow-lg">
                   Modifier
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
