<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('backoffice.pages.team.team', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.team.teamCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            "url" => "required",
            "nom" => "required",
            "fonction" => "required",
            "icone" => "required",

        ]);
        $team = new Team();

        $team->url = $request->url;
        $team->nom = $request->nom;
        $team->fonction = $request->fonction;
        $team->icone = $request->icone;
        $team->save();

        return redirect()->route('team.index')->with('message', 'Créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('backoffice.pages.team.teamShow', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('backoffice.pages.team.teamEdit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            "url"=> "required",
            "nom"=> "required",
            "fonction"=> "required",
            "icone"=> "required",
        ]);

        $team->url = $request->url;
        $team->nom = $request->nom;
        $team->fonction = $request->fonction;
        $team->icone = $request->icone;
        $team->save();

        return redirect()->route('team.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('message', 'supprimé avec succès');
    }
}
