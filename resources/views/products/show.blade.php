<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Producto Detalle</h1>
    <a href="{{route('products.index')}}">Atras</a>
    <br>
    <label for="">id:</label>{{$product->id}}
    <br>
    <label for="">nombre:</label>{{$product->name}}
    <br>
    <label for="">precio:</label>{{$product->price}}
    <br>
    <label for="">decripcion:</label> {{$product->description}}
</body>
</html>
