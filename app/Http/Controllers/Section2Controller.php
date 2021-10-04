<?php

namespace App\Http\Controllers;

use App\Models\Section2;
use Illuminate\Http\Request;

class Section2Controller extends Controller
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
        $section2 = Section2::all();
        return view('backoffice.pages.section-2.section-2', compact('section2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("create", AboutUs::class);
        return view('backoffice.pages.section-2.section-2Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", AboutUs::class);
        $request->validate([
            'contenu' => ['required']
        ]);

        $table = new Section2;

        $table -> contenu = $request -> contenu;

        $table -> save();

        return redirect() -> route('section2.index') -> with('message', 'Contenu créé !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section2  $section2
     * @return \Illuminate\Http\Response
     */
    public function show(Section2 $section2)
    {
        return view('backoffice.pages.section-2.section-2Show', compact('section2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section2  $section2
     * @return \Illuminate\Http\Response
     */
    public function edit(Section2 $section2)
    {
        $this->authorize("update", AboutUs::class);
        return view('backoffice.pages.section-2.section-2Edit', compact('section2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section2  $section2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section2 $section2)
    {
        $this->authorize("update", AboutUs::class);
        $request->validate([
            'contenu' => ['required']
        ]);

        $section2 -> contenu = $request -> contenu;

        $section2 -> save();

        return redirect() -> route('section2.index') -> with('message', 'Contenu modifié !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section2  $section2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section2 $section2)
    {
        $section2 -> delete();

        return redirect() -> route('section2.index') -> with('message', 'Contenu supprimé !');
    }
}
