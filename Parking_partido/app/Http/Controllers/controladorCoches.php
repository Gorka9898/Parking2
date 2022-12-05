<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;
use App\Models\Usuario;

class controladorCoches extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coche=Coche::all();
        return view("inicio")->with("elCoche", $coche);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $coche = Coche::find($id);
        $coche->delete();

        return redirect('/lista');
        
    }
        public function store(Request $request)
        {
            $request->validate([

                'matricula'=>'required |max:7',
                'marca'=>'required',
                'modelo'=>'required'
               
             ]);         
           
        $coche= new Coche;
            $coche->matricula= $request['matricula'];
            $coche->marca= $request['marca'];
            $coche->modelo= $request['modelo'];
        // add other fields
        $coche->save();
               
            return redirect('/crear',);
        }
  
    
    
    public function crear_coches_formulario()
    {
        return view("Nuevo_coche");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $coche=Coche::all();
        return view("Lista_coches")->with("elCoche", $coche);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscador(Request $request)
    {
        if (request('search')) {
            $cocheB = Coche::where('matricula', 'like', '%' . request('search') . '%')->get();
        } else {
            $cocheB = Coche::all();
        }
    
        return view('Buscar_coche')->with('cocheB', $cocheB);
        //return view("Buscar_coche");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function asignar_usuario(Request $request)   
    {

        return redirect('/devUser');
    }

    public function devolver_usuario(Request $request)   
    {

        return view("Asignar_usuario");
    }


    public function asignar(Request $request)   
    {

            $coche=Coche::all();
            $usuario=Usuario::all();

        return view('Coche_a_Usuario',["elCoche"=> $coche],["elUsuario"=> $usuario]);
    }

    public function Validar_asignacion(Request $request)   
    {

        return view('Coche_a_Usuario');
    }
    

    public function validar_usuario(Request $request)
    {
        $request->validate([

            'nombre'=>'required |max:7',
            'apellido'=>'required',
            'email'=> 'required | email',
           
         ]);
       
    $usuario= new Usuario;
        $usuario->nombre= $request['nombre'];
        $usuario->apellido= $request['apellido'];
        $usuario->email= $request['email'];
    // add other fields
    $usuario->save();

        return view('Asignar_usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar_formulario()
    {

        if (request('search')) {
            $cocheB = Coche::where('matricula', 'like', '%' . request('search') . '%')->get();
        } else {
            $cocheB = Coche::all();
        }


        return view("Buscar_coche")->with('cocheB', $cocheB);
    }
}
