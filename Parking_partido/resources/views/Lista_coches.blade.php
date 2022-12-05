@extends('inicio')

@section('Lista_coches')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<div style="border: 1px solid black;">



<div id="cuerpo2" style="border: 1px solid black;height:70px; background-color:lightgrey; border-radius:1%;" class="d-flex">

    <h1 style=" font-size:20px; margin:20px" class="col-12">Coches actuales</h1>

</div>

<h5 style="margin: 20px; margin-left:35px; border-bottom: 1px solid lightgrey; border-width:60%;width:90%; " class="col-12">Coches</h5>


<div style="margin: 5%;">
                  <table class="table">

    <tr>
        <td>
            <b>Matricula</b>
        </td>
        <td>
            <b>Marca</b>
        </td>
        <td>
            <b>Modelo</b>
        </td>
        <td>
            <b>Botones de borrado</b>
        </td>
    </tr>
<!--aqui va each-->@foreach($elCoche as $data)<!--Esto es un each camuflado-->

        
                        
        <tr>    
            <td>{{$data->matricula}}&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>{{$data->marca}}&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>{{$data->modelo}}&nbsp;&nbsp;&nbsp;&nbsp;</td>             


            <td>
                <form method="POST" action="{{route('borrar_coche', [$data->id])}}" ><!-- Meter el action con variable e id -->
                    {{ csrf_field() }}
                    @method('delete')<input type="submit" name="borrar_tarea"class="bg-danger" value="borrar_tarea">
                </form>
            </td>

        </tr>



   <br>
<!------------------->
   

@endforeach
</table>

<!------------------->

   <!-- aqui va endforeach -->
</div>





</div>



</div>

    
</body>
</html>

@endsection;