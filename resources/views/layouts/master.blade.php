<!DOCTYPE html>
<html lang= "en">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8">
        <title>Gestionstock - @yield('title')</title>
 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" link rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"crossorigin="anonymous"></script>


 
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