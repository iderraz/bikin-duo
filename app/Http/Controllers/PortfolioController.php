<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('backoffice.pages.portfolio.portfolio', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.portfolio.portfolioCreate');
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
            'url' => ['required'],
            'description' => ['required']
        ]);

        $table = new Portfolio;

        $table -> url = $request -> file('url') -> hashName();
        $table -> description = $request -> description;

        $table -> save();

        $request -> file("url") -> storePublicly("image", "public");

        return redirect() -> route('portfolio.index') -> with('message', 'Elément Portfolio créé !');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('backoffice.pages.portfolio.portfolioShow', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('backoffice.pages.portfolio.portfolioEdit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'url' => ['required'],
            'description' => ['required']
        ]);

        $portfolio -> url = $request -> file('url') -> hashName();
        $portfolio -> description = $request -> description;

        $portfolio -> save();

        Storage::disk("public") -> delete("image/" . $portfolio->id);

        $request -> file("url") -> storePublicly("image", "public");

        return redirect() -> route('portfolio.index') -> with('message', 'Elément Portfolio modifié !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk("public") -> delete("image/" . $portfolio->id);

        $portfolio -> delete();

        return redirect() -> route('portfolio.index') -> with('message', 'Elément Portfolio supprimé !');
    }
}
