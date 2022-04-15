@extends('paiementsalaire::layouts.master')

@section('content')
    <h1>Gestion des types de contrat</h1><br>
    <h3> Ajouter un nouveau type de contrat</h3>
    <form method="POST" action="{{route('handleAddTypeContrats')}}" class="md-float-material" >
    {{ csrf_field() }}
                        <label for="fname">Nom:</label>
                        <input type="text" id="fname" name="name"><br><br>
                       
                        <label for="fname">Description:</label>
                        <input type="text" id="fname" name="description"><br><br>

                        <label for="fname">Durée:</label>
                        <input type="text" id="fname" name="duration"><br><br> 
                        
                        <label for="fname">Taux de CNSS :</label>
                        <input type="text" id="fname" name="cnssRate"><br><br>
                       
                        <label for="fname">Taux de forprolos:</label>
                        <input type="text" id="fname" name="forprolosRate"><br><br>

                        <button type="submit">Ajouter</button>
    </form>
    <br><br>
    
    <center>
    <h3> Liste des types de contrat </h3>
<table border="5">
<thead>
<tr>
<th>Nom</th>
<th>Description</th>
<th>Durée </th>
<th>Taux de CNSS</th>
<th>Taux de forprolos</th>
<th><center> Action </center></th>
</tr>
</thead>
<tbody>
@foreach ($contrats as $contrat)
<tr>
<td>{{$contrat->name}}</td>
<td>{{$contrat->description}}</td>
<td>{{$contrat->duration}}</td>
<td>{{$contrat->cnssRate}}</td>
<td>{{$contrat->forprolosRate}}</td>
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