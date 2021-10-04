<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    public function __construct() {
        $this -> middleware('isConnected');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre = Titre::all();
        return view('backoffice.pages.titre.titre', compact('titre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.titre.titreCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Titre::class);
        $request->validate([
            'titre' => ['required'],
            'description' => ['required']
        ]);

        $table = new Titre;

        $table -> titre = $request -> titre;
        $table -> description = $request -> description;

        $table -> save();

        return redirect() -> route('titre.index') -> with('message', 'Titre ajouté !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        $this -> authorize('fullAccess');
        return view('backoffice.pages.titre.titreShow', compact('titre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        $this -> authorize('fullAccess');
        return view('backoffice.pages.titre.titreEdit', compact('titre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        $this->authorize("update", $titre);
        $request->validate([
            'titre' => ['required'],
            'description' => ['required']
        ]);

        $titre -> titre = $request -> titre;
        $titre -> description = $request -> description;

        $titre -> save();

        return redirect() -> route('titre.index') -> with('message', 'Titre modifié !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        $this->authorize("update", $titre);
        $titre -> delete();

        return redirect() -> route('titre.index') -> with('message', 'Titre supprimé !');
    }
}
