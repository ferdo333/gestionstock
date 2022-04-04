<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
  /*  public function index(){
        return view('')
        ->with('));
    } */ 
 
    public function consultar(){
        return view('consultar');
    }
 
    public function eliminar(){
        return view('eliminar');
    }
 
    public function registrar(){
        return view('registrar');
    }

    public function actualizar(){
        return view('actualizar');
    }
 
    public function guardarFormulario(Request $request){
        //logica de codigo
        $this->validate($request,[
            'nombre' => 'required' ,
             'coduni' => 'required|integer|max:1000',
             'categoria' => 'required',
             'sucursal'  => 'required',
             'descripcion' => 'required',
             'cantidad' => 'integer|required',
             'precio'   =>  'integer|required|min:1',
        ]);
         // $data = $request; (Lectura o impresión de datos)
   
        return 'Código único:'.$request->input("coduni").'  
        <br> Nombre:'.$request->input("nombre").
        ' <br> Categoría:'.$request->input("categoria").
        '<br> Sucursal:'.$request->input("sucursal").
        '<br> Descripción:'.$request->input("descripcion").
        '<br> Cantidad:'.$request->input("cantidad").
        '<br> Precio:'.$request->input("precio")
        ;
      
    }
}
