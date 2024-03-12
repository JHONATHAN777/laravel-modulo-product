<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>editar categoria</title>
</head>
<body>


    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Categoría</title>
    </head>
    <body>
    
    <div id="form">
        <header>
            <h1>Contacto</h1>
        </header>
    
        <div class="fish" id="fish"></div>
        <div class="fish" id="fish2"></div>
    
        <form id="waterform" method="POST" action="{{ route('category', ['category' => $categories->id]) }}">
            @csrf
            @method('PUT')
    
            <div class="formgroup" id="name-form">
                <label for="name">Nombre de la categoría</label>
                <input type="text" id="name" name="name" value="{{ $categories->name }}" required />
            </div>
    
            <input type="submit" value="¡Enviar tu mensaje!" />
        </form>
    </div>
    
    </body>
    </html>
    
    
</body>
</html>