
@extends('layouts.app')

@section('title', 'Créer une Évaluation')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-blue-600 mb-6 text-center">Créer une Nouvelle Évaluation</h1>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-md shadow-md">
        <form action="{{ route('evaluationsEleve.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="evaluation" class="block text-sm font-medium text-gray-700">Choisir l'évaluation</label>
                <select id="evaluation" name="evaluation" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <option value="">Sélectionner une évaluation</option>
                    <!-- Add options dynamically from the database -->
                </select>
            </div>
            <div class="mb-4">
                <label for="eleve" class="block text-sm font-medium text-gray-700">Choisir l'élève</label>
                <select id="eleve" name="eleve" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <option value="">Sélectionner un élève</option>
                    <!-- Add options dynamically from the database -->
                </select>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
