<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>lista d ecategorias</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre del vendedor</th>
            <th scope="col">Categoria</th>
            <th scope="col">Nombre del articulo</th>
            <th scope="col">Perecio</th>
            <th scope="col">Foto</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

          </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                
           
          <tr>
            <th scope="row">{{$product->product->id}}</th>
            <td>{{$product->product->user->name}}</td>

            <td>{{$product->product->description}}</td>
            <td>{{$product->product->price}}</td>
            <td width="8%" height="160%"><div id="{{$product->product->id}}" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active position-relative">
                  <img src="https://img.freepik.com/foto-gratis/hermosa-joven-delgada-haciendo-ejercicios-estiramiento-gimnasio-contra-blanco_155003-17254.jpg?size=626&ext=jpg&ga=GA1.2.100297812.1708107760&semt=ais" class="d-block w-100" alt="...">
                  <div class="position-absolute top-50 start-50 translate-middle" style="max-width: 100%; width: auto;">
                      <img src="{{$product->image}}" alt="..." class="img-overlay" style="max-width: 100%;">
                  </div>
              </div>
              
            
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#{{$product->product->id}}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#{{$product->product->id}}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div></td>
            <td><a  class="btn btn-primary">Editar</a></td>
            <td>
              <form  method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
             @endforeach

          </tr>
        </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>