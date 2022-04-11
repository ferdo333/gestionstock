@extends('layouts.master')
@section('title', 'eliminar')
 
@section('header')
    @parent
    <h2>Eliminar Producto</h2>
@stop
 
@section('content')
<hr>
  
<div class="container">
 
 <form action="{{ url('guardarFormulario') }}" method="post">
  <table class="table">
    <thead>
      <tr>
        <th>Ingrese Código único de producto que desea eliminar</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
          <th>
      <input type="text" class="form-control" name="coduni" aria-describedby="emailHelp"></th>
      </tr>      
      <tr>
<th>
      <button type="submit" class="btn btn-primary" >Eliminar</button>  </th></tr>
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
     

    </tbody>
  </table>
</div>



<hr>
@stop
 
@section('footer')
    <p>Gracias por visitarnos</p>
    @parent
@stop
 