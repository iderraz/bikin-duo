<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __construct() {
        $this -> middleware(['isConnected', 'isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = AboutUs::all();
        return view('backoffice.pages.aboutUs.aboutUs', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.aboutUs.aboutUsCreate');
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

            "emoji" => "required",
            "titre" => "required",
            "description" => "required",

        ]);

        $table = new AboutUs();

        $table->emoji = $request->emoji;
        $table->titre = $request->titre;
        $table->description = $request->description;
        $table->save();

        return redirect()->route('about.index')->with('message', 'Créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $about)
    {
        return view('backoffice.pages.aboutUs.aboutUsShow', compact('about'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $about)
    {
        return view('backoffice.pages.aboutUs.aboutUsEdit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $about)
    {
        $request->validate([
            "emoji"=> "required",
            "titre"=> "required",
            "description"=> "required",
        ]);

        $about->emoji = $request->emoji;
        $about->titre = $request->titre;
        $about->description = $request->description;
        $about->save();

        return redirect()->route('about.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $about)
    {   
        $about->delete();
        return redirect()->route('about.index')->with('message', 'supprimé avec succès');
    }
}
