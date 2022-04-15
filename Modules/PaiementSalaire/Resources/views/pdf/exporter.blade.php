<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche de paie</title>
</head>
<body>
@foreach($data as $key => $employee)
<h2>user Name: {{ $employee->name }}</h2>
<p>email : {{$employee->email}}</p>
@endforeach

</body>
</html>