<!DOCTYPE html>
<html lang= "en">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8">
        <title>Gestionstock - @yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .body{
    width: auto;
    margin: 0 auto;
    padding: 0 20px 20px 20px;
   
}
.links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
       
       </style> 
 
    </head>
<body class="container-fluid bg-3 text-center ">
<div class="container-fluid bg-3 text-center " >
       @section('header')
        <h1>Cabecera de la web de Gestión Stock</h1>
    @show
 
    <div class="container-fluid bg-3 text-center" >
        @yield('content')
    </div>
 


   
    @section('footer')
    <p>  Santiago de Chile
        <br>
        2022
        
        </p>
        
    @show     
    </div>
    
    
</body>
</html>