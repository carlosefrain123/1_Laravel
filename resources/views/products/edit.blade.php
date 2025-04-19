<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Producto</title>
</head>

<body>
    <h1>Nuevo Producto</h1>
    @if ($errors->any())
        <div>
            <strong>Opps!</strong> Algo falló
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('products.update',$product->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nombre</label>
        <input type="text" name="name" id="" value="{{$product->name}}" placeholder="Ingrese nombre">
        <br>
        <label for="">Precio:</label>
        <input type="text" name="price" value="{{$product->price}}" placeholder="Ingrese precio">
        <br>
        <label for="">Descripción:</label>
        <textarea name="description" id="" placeholder="Ingrese la description">
            {{$product->description}}
        </textarea>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>

</html>
