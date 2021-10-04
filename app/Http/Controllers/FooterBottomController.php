<?php

namespace App\Http\Controllers;

use App\Models\FooterBottom;
use Illuminate\Http\Request;

class FooterBottomController extends Controller
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
        $footerBottom = FooterBottom::all();
        return view('backoffice.pages.footerBottom.footerBottom', compact('footerBottom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.footerBottom.footerBottomCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", FooterBottom::class);

        $request->validate([
            'titre' => ['required'],
            'icone' => ['required'],
        ]);

        $table = new FooterBottom;

        $table -> titre = $request -> titre;
        $table -> icone = $request -> icone;

        $table -> save();

        return redirect() -> route('footerBottom.index') -> with('message', 'footer créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterBottom  $footerBottom
     * @return \Illuminate\Http\Response
     */
    public function show(FooterBottom $footerBottom)
    {
        return view('backoffice.pages.footerBottom.footerBottomShow', compact('footerBottom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterBottom  $footerBottom
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterBottom $footerBottom)
    {
        return view('backoffice.pages.footerBottom.footerBottomEdit', compact('footerBottom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterBottom  $footerBottom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterBottom $footerBottom)
    {
        $this->authorize("update", $footerBottom);

        $request->validate([
            'titre' => ['required'],
            'icone' => ['required'],
        ]);


        $footerBottom -> titre = $request -> titre;
        $footerBottom -> icone = $request -> icone;

        $footerBottom -> save();

        return redirect() -> route('footerBottom.index') -> with('message', 'footer modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterBottom  $footerBottom
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterBottom $footerBottom)
    {
        $this->authorize("delete", $footerBottom);

        $footerBottom -> delete();

        return redirect() -> route('footerBottom.index') -> with('message', 'footer supprimé !');
    }
}
