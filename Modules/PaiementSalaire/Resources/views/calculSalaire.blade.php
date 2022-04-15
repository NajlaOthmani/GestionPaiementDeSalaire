@extends('paiementsalaire::layouts.master')

@section('content')
    <h1>Paiement de salaire</h1>
<form method="GET" action="{{route('handleCalculSalaires')}}">
{{ csrf_field() }}
    <label for="fname">Cin Employe:</label>
    <input type="text" id="fname" name="cin" value="{{ old('cin') }}"><br><br>
    <label for="fname">Salaire brut:</label>
    <input type="text" id="fname" name="salaire" value="{{ old('salaire') }}"><br><br>
    <input type="checkbox" id="scales" name="scales">
    <label for="scales">Chef de famille</label> <br><br>
    <label for="pet-select">Enfant à charge:</label>
    <select id="pet-select">
    <option value="">0</option>
    <option value="">1</option>
    <option value="">2</option>
    <option value="">3</option>
    <option value="">4 et plus</option>
   </select>
   <br><br>
    <button type="submit">Calculer</button>

    <br><br><br>
    <label for="fname">Cin :</label>
    <input type="text" id="fname" name="c" value="{{$cinEmploye}}"><br><br>
    <label for="fname">Salaire brut:</label>
    <input type="text" id="fname" name="salary" value="{{$salaryEmploye}}"><br><br>
    <label for="fname">Retenu de CNSS:</label>
    <input type="text" id="fname" name="cnss" value="{{$retainedCnss}}"><br><br>
    <label for="fname">Salaire imposable:</label>
    <input type="text" id="fname" name="impossable" value="{{$taxableSalary}}"><br><br>
    <label for="fname">Retenue à la source :</label>
    <input type="text" id="fname" name="retenue" value="{{$tax}}"><br><br><br>
    <label for="fname">Net à apayer :</label>
    <input type="text" id="fname" name="net" value="{{$netSalary}}"><br><br>
    <a href="{{ url('exporter')}}" >Exporter fiche de paie</a>
</form>
@endsection 