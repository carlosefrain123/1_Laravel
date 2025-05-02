@extends('layouts.app')

@section('title', 'Laravel 11 Crud')

@section('content')
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Visualizar productos</h4>
            <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                    <label for="FormValidationDefault" class="form-label text-muted">Show Code</label>
                    <input class="form-check-input code-switcher" type="checkbox" id="FormValidationDefault">
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body">
            <p class="text-muted"><a href="{{route('products.index')}}"><strong>Inicio</strong></a> | Producto {{$product->id}}</p>

            <div class="live-preview">
                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="validationDefault01" value="{{$product->name}}" required="">
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Precio:</label>
                        <input type="text" class="form-control" id="validationDefault02" value="{{$product->price}}" required="">
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="validationDefault02" value="{{$product->description}}" required="">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
