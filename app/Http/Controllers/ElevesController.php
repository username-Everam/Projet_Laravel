<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleves;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleves::all();
        return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'eleves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_Naissance' => 'required',
            'num_etudiant' => 'required',
            'email' => 'required'
        ]);

        $eleves = new Eleves();
        $eleves->nom = $request->input('nom');
        $eleves->prenom = $request->input('prenom');
        $eleves->date_Naissance = $request->input('date_Naissance');
        $eleves->num_etudiant = $request->input('num_etudiant');
        $eleves->email = $request->input('email');
        $eleves->image = $request->input('image');
        $eleves->save();

        return redirect()->route('eleves.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('eleves.show', ['eleves' => Eleves::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('eleves.edit', ['eleves' => Eleves::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_Naissance' => 'required',
            'num_etudiant' => 'required',
            'email' => 'required',
            'image' => 'optional'
        ]);

        $eleve = Eleves::findOrFail($id);
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->date_Naissance = $request->input('date_Naissance');
        $eleve->num_etudiant = $request->input('num_etudiant');
        $eleve->email = $request->input('email');
        $eleve->image = $request->input('image');
        $eleve->save();

        return redirect()->route('eleves.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eleve = Eleves::findOrFail($id);
        $eleve->delete();
        return redirect()->route('eleves.index');
    }
}
