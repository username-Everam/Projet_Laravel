@extends('layouts.app')

@section('title', 'Créer une Nouvelle Évaluation')
@section('content')
<div class="max-w-2xl mx-auto bg-gray-900 shadow-lg rounded-lg p-6 mt-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Créer une Évaluation</h1>
    <form class="space-y-8" method="POST" action="{{ route('eleves.store') }}">
        @csrf
        <!-- Nom de l'évaluation -->
        <div class="flex flex-col">
            <label for="nomEvaluation" class="mb-2 text-sm font-semibold text-gray-400">Nom de l'Évaluation</label>
            <input type="text" id="nomEvaluation" name="nomEvaluation" 
                class="border border-gray-700 rounded-md p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                placeholder="Entrez le nom" required>
        </div>
        <!-- Date -->
        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex-grow">
                <label for="dateEvaluation" class="mb-2 text-sm font-semibold text-gray-400">Date</label>
                <input type="date" id="dateEvaluation" name="dateEvaluation" 
                    class="border border-gray-700 rounded-md p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                    required>
            </div>
            <div class="flex-grow">
                <label for="dureeEvaluation" class="mb-2 text-sm font-semibold text-gray-400">Durée (minutes)</label>
                <input type="number" id="dureeEvaluation" name="dureeEvaluation" 
                    class="border border-gray-700 rounded-md p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                    placeholder="Ex: 60" required>
            </div>
        </div>
        <!-- Description -->
        <div class="flex flex-col">
            <label for="description" class="mb-2 text-sm font-semibold text-gray-400">Description</label>
            <textarea id="description" name="description" rows="4" 
                class="border border-gray-700 rounded-md p-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                placeholder="Entrez une description..."></textarea>
        </div>
        <!-- Boutons -->
        <div class="flex justify-between items-center">
            <button type="reset" 
                class="px-6 py-3 rounded-md bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold">Réinitialiser</button>
            <button type="submit" 
                class="px-6 py-3 rounded-md bg-blue-500 hover:bg-blue-600 text-white font-semibold shadow-lg">Créer</button>
        </div>
    </form>
</div>
@endsection
