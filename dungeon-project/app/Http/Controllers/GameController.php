<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Support\Facades\Redirect;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personnage.index', [
            'personnage' => Character::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
       $magie= mt_rand(0,14);
       $force= mt_rand(0,14);
       $agilite= mt_rand(0,14);
       $intelligence= mt_rand(0,14);
       $pv=mt_rand(20, 50);
       
        return view('personnage.create',['magie'=>$magie,'force'=>$force,'agilite'=>$agilite,'intelligence'=>$intelligence,'pv'=>$pv]);
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
            'specialite' => 'required',
            'magie' => 'required|integer',
            'force' => 'required|integer',
            'agilite' => 'required|integer',
            'intelligence' => 'required|integer',
            'pv' => 'required|integer'
        ]);
        
        $personnage = Character::create([
            'id' => $request->input('user'),
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'specialite' => $request->input('specialite'),
            'magie' => $request->input('magie'),
            'force' => $request->input('force'),
            'agilite' => $request->input('agilite'),
            'intelligence' => $request->input('intelligence'),
            'pv' => $request->input('pv'),
            'user_id'=>Auth::user()->id,
        ]);
        $id = Auth::id();
        $personnage->save();
      
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
        $perso = Character::findOrFail($id);
        return view('personnage.show', [ 'perso' => $perso ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perso = Character::findOrFail($id);
        return view('personnage.edit', [ 'perso' => $perso ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // récupérer l'objet Blog correspondant à l'ID
        $perso = Character::findOrFail($id);

        // validation du formulaire
        $request->validate([
            
            'nom' => 'required',
            'description' => 'required',
            'specialite' => 'required',
            'magie' => 'required|integer',
            'force' => 'required|integer',
            'agilite' => 'required|integer',
            'intelligence' => 'required|integer',
            'pv' => 'required|integer'
        ]);

        // Mise à jour de l'objet
        $perso->nom = $request->input('nom');
        $perso->description = $request->input('description');
        $perso->specialite = $request->input('specialite');
        $perso->magie = $request->input('magie');
        $perso->force = $request->input('force');
        $perso->agilite = $request->input('agilite');
        $perso->intelligence = $request->input('intelligence');
        $perso->pv = $request->input('pv');
        

        // Enregistrement
        $perso->save();

        // redirection page ...
        $pageAccueil = route('personnage.index');
        return redirect($pageAccueil)->with('message', 'Mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $perso = Character::findOrFail($id);
            $perso->delete();
            return redirect(route('personnage.index'))->with('message', 'Supprimé avec succès');
        } catch(\Exception $error) {
            return response($error, 404);
        }
    }
    public function factory() {
        $users = Character::factory()->count(3)->create();
    }
}