@extends('paiementsalaire::layouts.master')

@section('content')
    <h1>Gestion des employés</h1>
    <div>
   <h3> Ajouter un nouveau employé</h3>
    </div>
    <form method="POST" action="{{route('handleAddEmployees')}}" class="md-float-material" >
    {{ csrf_field() }}
                        <label for="fname">Nom:</label>
                        <input type="text" id="fname" name="name"><br><br>
                       
                        <label for="fname">Prénom:</label>
                        <input type="text" id="fname" name="lastName"><br><br>

                        <label for="fname">CIN:</label>
                        <input type="text" id="fname" name="cin"><br><br> 
                        
                        <label for="fname">Date de naissance:</label>
                        <input type="date" id="fname" name="dateBirth"><br><br>
                       
                        <label for="fname">Sexe:</label>
                        <select name="sex" >
                                                    <option>Homme</option>
                                                    <option>Femme</option>
                                                                 
                        </select>

                        <label for="fname">Email:</label>
                        <input type="text" id="fname" name="email"><br><br>
                     
                        <label for="fname">Numéro de téléphone:</label>
                        <input type="text" id="fname" name="phoneNumber"><br><br>
                        
                        <label for="fname">Ville:</label>
                        <input type="text" id="fname" name="city"><br><br>
                        
                        <label for="fname">statut matrimonial:</label>
                        <input type="text" id="fname" name="maritalStatute"><br><br>
                        
                        <label for="fname">CNSS:</label>
                        <input type="text" id="fname" name="cnss"><br><br>
                        
                        <label for="fname">Function:</label>
                        <input type="text" id="fname" name="function"><br><br>
                        
                        <label for="fname">Type de contrat:</label>
                                     <select name="typeContract" >
                                     @foreach ($contrats as $contrat)
                                                    <option>{{$contrat->name}}</option> 
                                     @endforeach             
                                        </select>
                                       
                                    </div>
                        </div> 

                        <label for="fname">Date d'embauche:</label>
                        <input type="date" id="fname" name="hiringDate"><br><br>

                        <label for="fname">Date de fin de contrat:</label>
                        <input type="date" id="fname" name="contractEndDate"><br><br>

                        <button type="submit">Ajouter</button>
                    </form>

                    <h3>Listes des employées</h3>
<center>
<table border="5">
<thead>
<tr>
<th>Cin</th>
<th>Nom</th>
<th>Prénom</th>
<th>Date de naissance </th>
<th>Adresse Email</th>
<th>Numéro de téléphone</th>
<th>Sexe</th>
<th>Ville</th>
<th>Adresse</th>
<th>Fonction</th>
<th>CNSS</th>
<th>Statut matrimonial</th>
<th><center> Action </center></th>
</tr>
</thead>
<tbody>
@foreach ($employees as $employe)
<tr>
<td>{{$employe->cin}}</td>
<td>{{$employe->name}}</td>
<td>{{$employe->lastName}}</td>
<td>{{$employe->dateBirth}}</td>
<td>{{$employe->email}}</td>
<td>{{$employe->phoneNumber}}</td>
<td>{{$employe->sex}}</td>
<td>{{$employe->adress}}</td>
<td>{{$employe->function}}</td>
<td>{{$employe->cnss}}</td>
<td class="text-center"> 
<a><span class="fa fa-pencil"></span></a> 
<a><span class="fa fa-trash"></span></a>
</td>
</tr>
@endforeach
</tbody>
</table>
</center>
@endsection
