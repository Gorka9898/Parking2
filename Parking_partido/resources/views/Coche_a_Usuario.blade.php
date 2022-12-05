@extends("inicio")





@section("Asignar")


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="border: 1px solid black; margin-bottom: 50px;">

<div id="cuerpo1" style="border: 1px solid black;height:70px; background-color:lightblue; border-radius:1%;" class="d-flex">

    <h1 style=" font-size:20px; margin:20px" class="col-12">Crear usuario</h1>

</div>

<h5 style="margin: 20px; margin-left:35px" class="col-12">Usuario</h5>

<form method="post" action="{{route('Validar_asignacion')}}">
    {{ csrf_field() }}
    &nbsp;&nbsp;&nbsp;&nbsp; Usuario: <select name="sel_usuario" id="sel_usuario">
        <option value="Seleccione_Usuario">Seleccione Usuario</option>
        @foreach($elUsuario as $users)
        <option value="{{$users->nombre}}">{{$users->nombre}}</option>
        @endforeach
    </select><br><br>
    
    @error('nombre')<div class="alert alert-danger">
        {{ $message }} </div>
    @enderror   

    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;Coche: <select name="sel_coche" id="sel_coche">
        <option value="Seleccione_Coche">Seleccione Coche</option>
        @foreach($elCoche as $datos)
        <option value="{{$datos->matricula}}">{{$datos->matricula}}</option>
        @endforeach
    </select><br><br>
    
   
    <br>
 
   
    <div style="width: 100%;margin: 20px;">
        <button type="submit" style="margin: 20px;"> <strong>+</strong> Asignar</button>
    </div>


</form>

</div>
    
</body>
</html>




@endsection