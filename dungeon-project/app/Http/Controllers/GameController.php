<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function invite()
    {
        return view('personnage.invite');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    
    {
        return view('personnage.create', [
            'nom' => $request->old('nom'),
            'description' => $request->old('description'),
            'specialite' => $request->old('specialite'),
        ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => [ 'required', 'string', 'regex:/^[a-zA-Z]+$/' ], // 'required|string'
            'description' => [ 'required', 'string', 'regex:/^[a-zA-Z]+$/' ],
            'specialite' => [ 'required'],
        ]);
        $perso = [];
        $perso['nom'] = $request->input('nom');
        $perso['description'] = $request->input('description');
        $perso['specialite'] = $request->input('specialite');
        
        // dd($perso);
           
        // mt_srand((float) microtime()*1000000);
        // echo mt_rand(20, 50);
        echo rand(0, 14);
        
        return view('personnage.store', [
            'nom' => $request->old('nom'),
            'description' => $request->old('description'),
            'specialite' => $request->old('specialite'),
            'perso' => $request->old('perso')
            
            
        ]);
       
       
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
}