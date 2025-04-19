<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Comando3: php artisan make:controller ProductController --resource
     */

     //Obtener todos los productos
    public function index()
    {
        //Obtener todos los productos
        $products=Product::all();
        //Retornar la vista 'products.index' con la lista de productos
        return view('products.index',compact('products'));
    }


    public function create()
    {
        //Retornar la vista product.create
        return view('products.create');
    }

    public function store(Request $request)
    {
        //Validar Formulario
        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'description'=>'required',
        ]);
        //Crear un nuevo productos con los datos validados
        Product::create($request->all());
        //Redirigir a la lista de roductos con un mensaje de exito
        return redirect()->route('products.index')->with('success','Producto creado');
    }

    public function show(Product $product)
    {
        //Retornar la vista 'products.show' con el producto especificado
        return view('products.show',compact('product'));
    }

    public function edit(string $id)
    {
        //Retornar la vista 'products.edit' con el producto especificado para editar
        return view('products.edit',compact('products'));
    }

    public function update(Request $request, Product $product)
    {
        //Validar Formulario
        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'description'=>'required',
        ]);
        //Actualizar el producto con los datos validados
        $product->update($request->all());
        //Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success','Producto Actualizado');
    }
    public function destroy(Product $product)
    {
        //Eliminar el producto especificado
        $product->delete();
        //Redirigir a la lista de productos con un mensaje de exito
        return redirect()->route('products.index')->with('success','Producto Eliminado');
    }
}
