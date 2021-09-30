<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_emoji = Contact::all();
        return view('backoffice.pages.contact.contact', compact('contact_emoji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.contact.contactCreate');
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

            'icone' => ['required'],
            'titre' => ['required'],
            'contenu' => ['required'],

        ]);
        $contact_emoji = new Contact();

        $contact_emoji->icone = $request->icone;
        $contact_emoji->titre = $request->titre;
        $contact_emoji->contenu = $request->contenu;
        $contact_emoji->save();

        return redirect()->route('contact.index')->with('message', 'Créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('backoffice.pages.contact.contactShow', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('backoffice.pages.contact.contactEdit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            "icone"=> "required",
            "titre"=> "required",
            "contenu"=> "required",
        ]);

        $contact->icone = $request->icone;
        $contact->titre = $request->titre;
        $contact->contenu = $request->contenu;
        $contact->save();

        return redirect()->route('contact.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('message', 'supprimé avec succès');
    }
}
