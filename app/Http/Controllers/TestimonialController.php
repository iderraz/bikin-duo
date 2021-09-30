<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('backoffice.pages.testimonial.testimonial', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.testimonial.testimonialCreate');
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
        $testimonial = new Testimonial();

        $testimonial->nom = $request->nom;
        $testimonial->fonction = $request->fonction;
        $testimonial->icone = $request->icone;
        $testimonial->url = $request->file("url")->hashName();
        $testimonial->save();

        $request->file('url')->storePublicly('img', 'public');
        return redirect()->route('testimonial.index')->with('message', 'ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('backoffice.pages.testimonial.testimonialShow', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backoffice.pages.testimonial.testimonialEdit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            "url"=> "required",
            "nom"=> "required",
            "fonction"=> "required",
            "icone"=> "required",
        ]);
        Storage::disk("public")->delete("img/" . $testimonial->url);
        $testimonial->nom = $request->nom;
        $testimonial->fonction = $request->fonction;
        $testimonial->icone = $request->icone;
        $testimonial->url = $request->file("url")->hashName();
        $testimonial->save();
        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('testimonial.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk('public')->delete('img/'. $testimonial->url);
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('message', 'supprimé avec succès');
    }
}
