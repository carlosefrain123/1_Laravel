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
    <a href="{{ route('products.create') }}">Nuevo Registro</a>
    <table>
        <tr>
            <th>id</th>
            <th>Nomnbre</th>
            <th>Precio</th>
            <th>Descripcion</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{route('products.show',$product->id)}}">Mostrar</a>
                </td>
                <td>
                    <a href="{{route('products.edit',$product->id)}}">Editar</a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
