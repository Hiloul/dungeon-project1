<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
      
       
        return view('equipe.create');
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
            'nom' => 'required',
            'description' => 'required',
            'nombreplace' => 'required|integer',
        ]);
        
        $group = Equipe::create([
            'id' => $request->input('user'),
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'nombreplace' => $request->input('nombreplace'),
            'group_id'=>Auth::user()->id,
        ]);
        $id = Auth::id();
        $group->save();
      
        return view('welcome')->with('message', 'Créer avec succès');
    }

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Equipe::findOrFail($id);
        return view('equipe.show', [ 'group' => $group ]);
    }



    
}
