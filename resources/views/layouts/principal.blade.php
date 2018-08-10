<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="{{ asset('js/app.js') }}" ></script>
        <link href={{asset('css/app.css')}} rel="stylesheet">
        <link href={{asset('css/custom.css')}} rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script>
            $( document ).ready(function() {
                $(".alert").fadeTo(3500, 500).slideUp(500, function(){
                $(".alert").slideUp(500);
                });
            });                   
        </script>
        <title>Controle de estoque</title>       
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-sm bg-info"> 
                <a class="navbar-brand" href="/produtos">Estoque Laravel</a>            
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{action('ProdutoController@lista')}}" class="nav-link">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{action('ProdutoController@novo')}}" class="nav-link">novo</a>
                    </li>
                </ul>
            </nav>
        @yield('content')        
        <footer class="footer">
            <p>© Livro de Laravel da Casa do Código.</p>
        </footer>  
        </div>              
    </body>
</html>