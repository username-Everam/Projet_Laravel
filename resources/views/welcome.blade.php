
@extends('layouts.app')

@section('title', 'Tableau de Bord')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-extrabold text-center text-blue-700 mb-8">Bienvenue sur le Tableau de Bord</h1>
        <p class="text-center text-gray-600 mb-12">Accédez rapidement aux différentes sections de la plateforme.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div onclick="location.href='/eleves'" class="p-6 bg-white border rounded-lg shadow-md hover:shadow-lg cursor-pointer text-center">
                <h2 class="text-xl font-semibold text-blue-600 mb-2">👩‍🎓 Les Élèves</h2>
                <p class="text-gray-500">Gérez les informations des élèves et suivez leurs progrès.</p>
            </div>
            <div onclick="location.href='/modules'" class="p-6 bg-white border rounded-lg shadow-md hover:shadow-lg cursor-pointer text-center">
                <h2 class="text-xl font-semibold text-blue-600 mb-2">📚 Les Modules</h2>
                <p class="text-gray-500">Parcourez et gérez les différents modules disponibles.</p>
            </div>
            <div onclick="location.href='/evaluations'" class="p-6 bg-white border rounded-lg shadow-md hover:shadow-lg cursor-pointer text-center">
                <h2 class="text-xl font-semibold text-blue-600 mb-2">📝 Les Évaluations</h2>
                <p class="text-gray-500">Consultez et administrez les évaluations des élèves.</p>
            </div>
        </div>
    </div>
@endsection
