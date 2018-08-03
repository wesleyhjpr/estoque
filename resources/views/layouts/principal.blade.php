<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href={{asset('css/app.css')}} rel="stylesheet">
        <link href={{asset('css/custom.css')}} rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-dark bg-info"> <a class="navbar-brand" href="/produtos">Estoque Laravel</a>            
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/produtos" class="nav-link">Listagem</a>
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