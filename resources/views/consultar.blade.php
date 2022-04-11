@extends('layouts.master')
@section('title', 'consultar')
 
@section('header')
    @parent
    <h2>Lista de productos</h2>
@stop
 
@section('content')
<hr>
 
<div class="container">
  <h2></h2>
  <p>Descripición de la pagina blablablabla</p>
  <table class="table">
    <thead>
      <tr>
        <th>Código único</th>
        <th>Nombre Producto</th>
        <th>Categoría</th>
        <th>Sucursal</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>OO1</td>
        <td>Polera Roja Hombre</td>
        <td>Poleras</td>
        <td>Providencia</td>
        <td>Polera Roja, talla M, de hombre.</td>
        <td>3</td>
        <td>$15.000</td>
      </tr>      
      <tr class="success">
        <td>O11</td>
        <td>Polera Azul Mujer</td>
        <td>Poleras</td>
        <td>Providencia</td>
        <td>Polera Roja, talla S, de mujer.</td>
        <td>2</td>
        <td>$15.000</td>
      </tr>
      
    </tbody>
  </table>
</div>

<hr>
@stop
 
@section('footer')
    <p>Gracias por visitarnos</p>
    @parent
@stop
 
