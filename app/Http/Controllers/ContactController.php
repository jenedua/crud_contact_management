<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contact;

class ContactController extends Controller
{
    public readonly  Contact $contact;
    Public function __construct(){
        $this->contact = new Contact();

    }
    
    public function index()
    {
        $contacts = $this->contact->all();
        return view('contacts', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->contact->create([
            'name' => $request->input('Name'),
            'contact' => $request->input('Contact'),
            'email' => $request->input('email'),

        ]); 

        if($created){
            return redirect()->back()->with('message', 'Successfully created');
            
        }
        return redirect()->back()->with('message', 'Error created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        var_dump($contact);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact_edit', ['contact' =>$contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->contact->where('id', $id)->update($request->except(['_token', '_method']));
        //var_dump($request->except(['_token', '_method']));
        if($updated){
            return redirect()->back()->with('message', 'Successfully updated');
        }
        return redirect()->back()->with('message', 'Error updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
