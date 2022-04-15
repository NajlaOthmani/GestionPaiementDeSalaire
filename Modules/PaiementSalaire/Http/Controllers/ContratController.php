<?php

namespace Modules\PaiementSalaire\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PaiementSalaire\Entities\Contrat;
class ContratController extends Controller
{
    /**
     * return the list of type contract.
     * @return Renderable
     */
    public function showTypeContrat()
    {
        $contrats = Contrat::all();
        return view('paiementsalaire::typeContrat',compact('contrats'));
    }
     /**
     * Create a new type of contract.
     * @param Request $request
     * @return Renderable
     */
    public function handleAddTypeContrat(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'cnssRate' => 'required',
            'forprolosRate' => 'required',
        ]);
        $contrat = Contrat::create([
            'name' => $request->name,
            'description' => $request->description,
            'duration' => $request->duration,
            'cnssRate' => $request->cnssRate,
            'forprolosRate' => $request->forprolosRate,
        
        ]);
        return back();
    
    }

   

    

   
}
