@extends('paiementsalaire::layouts.master')

@section('content')
    <h1>Paiement de salaire</h1>
<form method="POST" action="{{route('handleCalculSalaires')}}">
{{ csrf_field() }}
    <label for="fname">Cin Employe:</label>
    <input type="text" id="fname" name="salaire"><br><br>
    <label for="fname">Salaire brut:</label>
    <input type="text" id="fname" name="salaire"><br><br>
    <button type="submit">Calculer</button>

    <br><br>
    <label for="fname">Salaire brut:</label>
    <input type="text" id="fname" name="salary" value="{{$salaryEmploye}}"><br><br>
    <label for="fname">Retenu de CNSS:</label>
    <input type="text" id="fname" name="cin" value="{{$retainedCnss}}"><br><br>
    <button type="submit">Exporter fiche de paie</button>
    <a href="{{ url('employe')}}" >Exporter fiche de paie</a>
</form>
@endsection 