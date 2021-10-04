<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
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
        $feature = Feature::all();
        return view('backoffice.pages.features.features', compact('feature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.features.featuresCreate');
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
            'titre' => ['required'],
            'description_1' => ['required'],
            'description_2' => ['required'],
            'url' => ['required'],
        ]);

        $table = new Feature;

        $table -> titre = $request -> titre;
        $table -> description_1 = $request -> description_1;
        $table -> description_2 = $request -> description_2;
        $table -> url = $request -> file('url') -> hashName();

        $table -> save();

        $request -> file("url") -> storePublicly("image", "public");

        return redirect() -> route('feature.index') -> with('message', 'Feature créé !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        return view('backoffice.pages.features.featuresShow', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('backoffice.pages.features.featuresEdit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'titre' => ['required'],
            'description_1' => ['required'],
            'description_2' => ['required'],
            'url' => ['required'],
        ]);

        $feature -> titre = $request -> titre;
        $feature -> description_1 = $request -> description_1;
        $feature -> description_2 = $request -> description_2;
        $feature -> url = $request -> file('url') -> hashName();

        $feature -> save();

        Storage::disk("public") -> delete("image/" . $feature->url);

        $request -> file("url") -> storePublicly("image", "public");

        return redirect() -> route('feature.index') -> with('message', 'Feature modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        Storage::disk("public") -> delete("image/" . $feature->url);

        $feature -> delete();

        return redirect() -> route('feature.index') -> with('message', 'Feature supprimé !');
    }
}
