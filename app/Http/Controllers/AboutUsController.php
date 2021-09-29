<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_emoji = AboutUs::all();
        return view('backoffice.pages.aboutUs.aboutUs', compact('about_emoji'));
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
        $about_emoji = new AboutUs();

        $about_emoji->emoji = $request->emoji;
        $about_emoji->titre = $request->titre;
        $about_emoji->description = $request->description;
        $about_emoji->save();

        return redirect()->route('aboutUs.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $about_emoji)
    {
        return view('backoffice.pages.aboutUs.aboutUsShow', compact('about_emoji'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $about_emoji)
    {
        return view('backoffice.pages.aboutUs.aboutUsEdit', compact('about_emoji'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $about_emoji)
    {
        $request->validate([
            "emoji"=> "required",
            "titre"=> "required",
            "description"=> "required",
        ]);

        $about_emoji->emoji = $request->emoji;
        $about_emoji->titre = $request->titre;
        $about_emoji->description = $request->description;
        $about_emoji->save();

        return redirect()->route('aboutUs.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $about_emoji)
    {   
        $about_emoji->delete();
        return redirect()->route('aboutUs.index')->with('message', 'supprimé avec succès');
    }
}
