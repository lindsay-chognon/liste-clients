<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Noms_de_domaine;
use Illuminate\Http\Request;

class NomsDeDomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noms_de_domaine = Noms_de_domaine::all();
        return view('noms_de_domaine.index', ['noms_de_domaine' => $noms_de_domaine]);
    }

    public function search(Request $request){

        $search = $request->input('search');

        // Recherche dans la colonne nom_domaine
        $noms_de_domaine = Noms_de_domaine::query()
            ->where('nom_domaine', 'LIKE', "%{$search}%")
            ->get();

        // Retourne la liste prenant en compte la recherche
        return view('noms_de_domaine.index', ['noms_de_domaine' => $noms_de_domaine]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get clients to display on the form
        $clients = Clients::all();
        return view('noms_de_domaine.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $noms_de_domaines = new Noms_de_domaine;
        $noms_de_domaines->nom_domaine = $request->nom_domaine;
        $noms_de_domaines->cout_annuel = $request->cout_annuel;
        $noms_de_domaines->client_id = $request->client;

        $noms_de_domaines->save();

        return redirect()->route('noms_de_domaine.index')->with('message', 'Le nom de domaine a bien été ajouté.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupération du nom de domaine
        $nom_de_domaine = Noms_de_domaine::find($id);

        return view('noms_de_domaine.show', ['nom_de_domaine' => $nom_de_domaine]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noms_de_domaine $noms_de_domaine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noms_de_domaine $noms_de_domaine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noms_de_domaine $noms_de_domaine)
    {
        //
    }
}
