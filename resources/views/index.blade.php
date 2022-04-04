@extends('layouts.master')
@section('title', 'index')
@section('header')
  @parent<h1>Gestión de Stock</h1>
  @stop

  @section('content')
<body>
<div class="container-fluid bg-3 text-center">

</div>
<div>
<nav class="container" >
            <ul  class="nav  justify-content-center ">
               <li class="nav-item">
                  
                   <a class="btn btn-outline-danger" href="/consultar" >Consultar</a></li>
                <li class="nav-item">
                    
                        <a class="btn btn-outline-danger" href="/registrar" >Registrar Producto</a>
                  </li>
                  <li class="nav-item">
                    
                        <a class="btn btn-outline-danger" href="/actualizar" >Actualizar Producto</a>
                  </li>
                <li class="nav-item">
                   
                        <a class="btn btn-outline-danger" href="/eliminar" >Dar de baja</a>
                  </li></nav>
                  
                  
                  </div>


</body>
@stop

