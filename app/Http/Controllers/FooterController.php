<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
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
        $footer = Footer::all();
        return view('backoffice.pages.footer.footer', compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.footer.footerCreate');
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
            'links' => ['required'],
            'services' => ['required'],
        ]);

        $table = new Footer;

        $table -> links = $request -> links;
        $table -> services = $request -> services;

        $table -> save();

        return redirect() -> route('footer.index') -> with('message', 'Footer créé !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        return view('backoffice.pages.footer.footerShow', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('backoffice.pages.footer.footerEdit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'links' => ['required'],
            'services' => ['required'],
        ]);

        $footer -> links = $request -> links;
        $footer -> services = $request -> services;

        $footer -> save();

        return redirect() -> route('footer.index') -> with('message', 'Footer modifié !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer -> delete();

        return redirect() -> route('footer.index') -> with('message', 'Footer supprimé !');
    }
}
