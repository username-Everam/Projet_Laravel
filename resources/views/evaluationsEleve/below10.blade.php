
@extends('layouts.app')

@section('title', 'Élèves avec note inférieure à 10')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-blue-600 mb-6 text-center">
        Élèves avec note inférieure à 10 pour l'évaluation "{{ $evaluation->titre }}"
    </h1>

    @if($eleves->isEmpty())
        <p class="text-center text-gray-500">Il n'y a aucun élève avec une note inférieure à 10 pour cette évaluation.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($eleves as $eleve)
                <div class="p-4 border border-gray-300 rounded-md shadow-md bg-white hover:shadow-lg">
                    <h2 class="text-lg font-medium text-gray-800">{{ $eleve->eleve->nom }} {{ $eleve->eleve->prenom }}</h2>
                    <p class="text-sm text-gray-600">Note : <span class="font-semibold">{{ $eleve->note }}</span></p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
