<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>crear categoria</title>
</head>
<body>


    
    <div id="form">
        <header>
            <h1>Contacto</h1>
        </header>
    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>
    
    <form id="waterform" method="post" action="{{route("crear")}}">
        @csrf
        <div class="formgroup" id="name-form">
            <label for="name">nombre de categoria</label>
            <input type="text" id="name" name="name" required />
        </div>
        <input type="submit" value="¡Enviar tu mensaje!" />
    </form>
    </div>
    
</body>
</html>