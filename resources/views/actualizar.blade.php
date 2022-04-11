@extends('layouts.master')
@section('title', 'actualizar')
 
@section('header')
    @parent
    <h2>Actualizar Producto</h2>
@stop
 
@section('content')
<hr>
 
<div class="container justify-content-center">
    <div class="row">
        <div class="col col-lg-4">
            <form action="{{ url('guardarFormulario') }}" method="post">
                <div class="container justify-content-center">
                    <label for="coduni" class="form-label">Código único de producto</label>
                    <input type="text" class="form-control" name="coduni" aria-describedby="emailHelp">
                </div>
                <div class="container justify-content-center">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class=" container justify-content-center">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" class="form-control" name="categoria">
                </div>
                <div class=" container justify-content-center">
                    <label for="sucursal" class="form-label">Sucursal</label>
                    <select type="text" class="form-control" name="sucursal" value="00">
                       <option value="00">Seleccione una sucursal</option>
                        <option value="01">Santiago</option>
                       <option value="02">Rancagua</option>
                        <option value="03">Valparaíso</option>
                        </select>
                </div>
                <div class=" container justify-content-center">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>
                <div class=" container justify-content-center">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad">
                </div>
                <div class=" container justify-content-center">
                    <label for="precio" class="form-label">Precio </label>
                    <input type="text" class="form-control" name="precio">
                </div>
               <hr> <div class= "container justify-content-center">
                    <button type="submit" class="btn btn-primary" >Actualizar</button> 
                    @if($errors->any())
                    <hr>
              <div class="alert alert-danger"><ul>@foreach($errors->all() as $error) 
                  <li>{{$error }}</li>
                  @endforeach
            </ul>
             </div>   
              @endif
                </div>
             
            </form>
        </div>
    </div>
</div>
<hr>
@stop
 
@section('footer')
    <p>Gracias por visitarnos</p>
    @parent
@stop
 