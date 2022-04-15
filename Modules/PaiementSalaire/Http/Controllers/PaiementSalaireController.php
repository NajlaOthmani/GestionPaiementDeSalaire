<?php

namespace Modules\PaiementSalaire\Http\Controllers;
use Modules\PaiementSalaire\Entities\Contrat;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaiementSalaireController extends Controller
{
    /**
     * calculate employee net salary
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request)
    {
       $salaryEmploye = $request->salaire;
       $retainedCnss =$request->salaire*9/100;
       $taxableSalary =$salaryEmploye- $retainedCnss;
       $tax=$request->salaire*9/100;
       $netSalary =$taxableSalary -$tax;
       $cinEmploye=$request->cin;
       return view('paiementsalaire::calculSalaire',compact('salaryEmploye','retainedCnss','taxableSalary','netSalary','tax','cinEmploye'));
    }

    
    
       
}
