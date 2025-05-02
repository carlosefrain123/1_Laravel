@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Form Grid</h4>
            <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                    <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                    <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body">
            <p class="text-muted"><a href="{{route('products.index')}}"><strong>Inicio</strong></a></p>
            @if ($errors->any())
                <p class="text-muted">Upps</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <div class="live-preview">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Ingrese su nombre" name="name"
                                    id="firstNameinput">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lastNameinput" class="form-label">Precio:</label>
                                <input type="text" class="form-control" placeholder="Ingrese su precio" name="price"
                                    id="lastNameinput">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="compnayNameinput" class="form-label">Descripción</label>
                                <input type="text" class="form-control" name="description" placeholder="Ingrese su descripción"
                                    id="compnayNameinput">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
@endsection
