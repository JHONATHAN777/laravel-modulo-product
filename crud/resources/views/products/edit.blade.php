<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear categoría</title>
</head>
<body>

<div id="form">
    <header>
        <h1>Contacto</h1>
    </header>
    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>
    
    
    <form id="waterform" method="post" action="{{ route('product.update', ['id' => $product->id]) }}">

        @csrf
        @method('PUT')
        <div class="form-group" id="user-id-form">
            <label for="user_id">Nombre del vendedor</label>
            <select id="user_id" name="user_id" class="form-select"required>
                <option value="{{ $product->user->id }}">{{ $product->user->name }}</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group" id="category-id-form">
            <label for="category_id">Nombre de la categoría</label>
            <select id="category_id" name="category_id" class="form-select" required>
                <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                @foreach($products as $product)
                    <option type="text" value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group" id="category-name-form">
            <label for="description">Nombre</label>
            <input type="text" id="description" value="{{ $product->description }}" name="description" class="form-control" required />
        </div>
        <div class="form-group" id="category-name-form">
            <label for="price">Precio</label>
            <input type="text" id="price" value="{{ $product->price }}" name="price" class="form-control" required pattern="\d+" title="Ingrese solo números" />
        </div>
        
        <input type="submit" value="¡Enviar tu mensaje!" />
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
