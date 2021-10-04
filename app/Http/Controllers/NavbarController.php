<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
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
        $navbar = Navbar::all();
        return view('backoffice.pages.navbar.navbar', compact('navbar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.navbar.navbarCreate');
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
            'contenu' => ['required']
        ]);

        $table = new Navbar;

        $table -> contenu = $request -> contenu;

        $table -> save();

        return redirect() -> route('navbar.index') -> with('message', 'élément Navbar créé !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        return view('backoffice.pages.navbar.navbarShow', compact('navbar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view('backoffice.pages.navbar.navbarEdit', compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        $request->validate([
            'contenu' => ['required']
        ]);

        $navbar -> contenu = $request -> contenu;

        $navbar -> save();

        return redirect() -> route('navbar.index') -> with('message', 'élément Navbar créé !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        $navbar -> delete();

        return redirect() -> route('navbar.index') -> with('message', 'élément Navbar supprimé !');
    }
}
