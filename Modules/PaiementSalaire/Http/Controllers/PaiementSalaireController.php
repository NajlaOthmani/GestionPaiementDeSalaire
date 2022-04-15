<?php

namespace Modules\PaiementSalaire\Http\Controllers;
use Modules\PaiementSalaire\Entities\Contrat;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaiementSalaireController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $salaryEmploye = $request->salaire;
        $retainedCnss =$request->salaire;
        return view('paiementsalaire::calculSalaire',compact('salaryEmploye','retainedCnss'));
    }

    /**
     * Create a new type of contract.
     * @param Request $request
     * @return Renderable
     */
    public function handleCalculSalaire(Request $request)
    {
        $salaryEmploye = $request->salaire;
       $retainedCnss =$request->salaire*9/100;
       return view('paiementsalaire::calculSalaire',compact('salaryEmploye','retainedCnss'));
    
    }
    
       
}
