
@extends('layouts.app')

@section('title', "Détails de l'Utilisateur")

@section('content')
<div class="max-w-2xl mx-auto bg-gray-900 p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-blue-400 text-center">Détails du Profil Utilisateur</h2>
    <div class="mb-4">
        <label class="block text-gray-400 font-semibold mb-2">📧 Email :</label>
        <p class="text-gray-300">{{ $user->email }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-gray-400 font-semibold mb-2">👤 Nom :</label>
        <p class="text-gray-300">{{ $data->nom }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-gray-400 font-semibold mb-2">📝 Prénom :</label>
        <p class="text-gray-300">{{ $data->prenom }}</p>
    </div>
    <div class="flex justify-end mt-6">
        <a href="{{ route('users.index') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">
            Retour à la liste
        </a>
    </div>
</div>
@endsection
