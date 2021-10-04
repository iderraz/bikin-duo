<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $service = Service::all();
        return view('backoffice.pages.services.services', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.services.servicesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Service::class);
        $request->validate([

            "emoji" => "required",
            "titre" => "required",
            "description" => "required",

        ]);
        $service = new Service();

        $service->emoji = $request->emoji;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('service.index')->with('message', 'Créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('backoffice.pages.services.servicesShow', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backoffice.pages.services.servicesEdit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize("update", $service);
        $request->validate([
            "emoji"=> "required",
            "titre"=> "required",
            "description"=> "required",
        ]);

        $service->emoji = $request->emoji;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('service.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize("update", $service);
        $service->delete();
        return redirect()->route('service.index')->with('message', 'supprimé avec succès');
    }
}
