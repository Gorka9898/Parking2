
<!Doctype html>
<html>

<head>
    <title>
        Ejercicio Coches
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container" style="width: 60%; margin-left:20%">


            <div style="border:1px solid black; margin-bottom:50px;background-color:lightblue; border-radius:1%;height:60px; display:flex;align-items:center">
            <h1 style="width:80%; float:left">Lista Coches</h1>

            <a  href="{{ route('api_user') }}">Api usuarios y coches</a>&nbsp;&nbsp;
            <a  href="{{ route('api_ultimos') }}">Api ultimos</a>&nbsp;&nbsp;
            <a  href="{{ route('Nuevo_coche') }}">Añadir Coche</a>&nbsp;&nbsp;
            <a href="{{ route('Lista_coches') }}">Lista</a>&nbsp;&nbsp;
            <a  href="{{ route('Buscar_coche') }}">Buscar</a>&nbsp;&nbsp;
            <a  href="{{ route('Asignar_usuario') }}">Añadir Usuarios</a>&nbsp;&nbsp;
            <a href="{{route('Asignar')}}">Crear coche y usuario</a>&nbsp;&nbsp;


        </div>



        <!------------------------------------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------CONTENEDOR 1---------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->

        <div>
            @yield('Nuevo_coche')
        </div>



        <!------------------------------------------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------CONTENEDOR 2----------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->



        <div>
            @yield('Lista_coches')
        </div>


        <!------------------------------------------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------CONTENEDOR 3----------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->


        <div>
            @yield('Buscar_coche')
        </div>



        <!------------------------------------------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------CONTENEDOR 4----------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->


        <div>
            @yield('Asignar_usuario')
        </div>



                <!------------------------------------------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------CONTENEDOR 4----------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->


        <div>
            @yield('Asignar')
        </div>


    </div>




</body>

</html>
