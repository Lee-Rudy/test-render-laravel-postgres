<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class nom_controller extends Controller
{
    //

    public function index()
    {
        $client = client::all();
        return view('page.index', ['client' => $client]);
        
    }

    public function save(Request $request)
    {
        $nom = $request->input('nom');
        client::create(['nom' => $nom]); 
        return redirect()->back()->with('success', 'nom bien ajoutée.');
    }
}
