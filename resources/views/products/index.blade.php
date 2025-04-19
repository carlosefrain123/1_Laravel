<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 - Crud</title>
</head>

<body>
    <h1>Listado de productos</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Nomnbre</th>
            <th>Precio</th>
            <th>Descripcion</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
