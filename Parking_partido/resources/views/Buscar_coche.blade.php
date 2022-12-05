@extends('inicio')



@section('Buscar_coche')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="{{route('Buscar_coche')}}">
{{ csrf_field() }}
        <input type="search" class="form-control" placeholder="Buscar coche" name="search">
    </form>
    <br>

    <ul class="list-group mt-3">
        @forelse($cocheB as $coche)
            <li class="list-group-item">{{ $coche->matricula }}</li>
        @empty
            <li class="list-group-item list-group-item-danger">Coche no encontrado</li>
        @endforelse
    </ul>
</body>
</html>

@endsection