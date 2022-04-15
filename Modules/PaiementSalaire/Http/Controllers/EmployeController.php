<?php

namespace Modules\PaiementSalaire\Http\Controllers;
use Modules\PaiementSalaire\Entities\Employe;
use Modules\PaiementSalaire\Entities\Contrat;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployeController extends Controller
{
    /**
     * return the list of employees.
     * @return Renderable
     */
    public function showEmployees()
    {
        $employees = Employe::all();
        $contrats = Contrat::all();
        return view('paiementsalaire::index',compact('employees','contrats'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function showEmploye()
    {
        return view('paiementsalaire::create');
    }

   /**
     * Create a new employe.
     * @param Request $request
     * @return Renderable
     */
    public function handleAddEmploye(Request $request)
    {
        $request->validate([
            'cin' => 'required',
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'dateBirth' => 'date',
            'maritalStatut' => 'required',
            'city' => 'required',
            'adress' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:255',
            'cnss' => 'required',
            'function' => 'required',
            'hiringDate' => 'required',
            'contractEndDate' => 'required',
            'typeContract' => 'required',
               
        ]);
        $employe = Employe::create([
            'cin' => $request->cin,
            'name' => $request->name,
            'lastName' => $request->lastName,
            'dateBirth' => $request->dateBirth,
            'sex' => $request->sex,
            'maritalStatut' => $request->maritalStatut,
            'city' => $request->city,
            'adress' => $request->adress,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'cnss' => $request->cnss,
            'function' => $request->function,
            'typeContract' => $request->typeContract,
            'hiringDate' => $request->hiringDate,
            'contractEndDate' => $request->contractEndDate,
        
        ]);
        return back();
       /*
        try{
        $employe = new Employe();
        $employe->cin              = $request->cin ;
        $employe->name             = $request->name;
        $employe->lastName         = $request->lastName;
        $employe->dateBirth        = $request->dateBirth;
        $employe->sex              = $request->sex;
        $employe->maritalStatut    = $request->maritalStatut;
        $employe->city             = $request->city;
        $employe->adress           = $request->adress;
        $employe->email            = $request->email;
        $employe->phoneNumber      = $request->phoneNumber;
        $employe->cnss             = $request->cnss;
        $employe->function         = $request->function;
        $employe->typeContract     = $request->typeContract;
        $employe->hiringDate       = $request->hiringDate;
        $employe->contractEndDate  = $request->function;
        $employe->save();
        DB::commit();
        }catch(\Exception $e){
        DB::rollback();
        return redirect()->back();
        }*/
        
    
    }
   

    


    
}
