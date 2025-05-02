@extends('layouts.app')

@section('title', 'Laravel 11 Crud')

@section('content')
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Default Table</h4>
            <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                    <label for="default-showcode" class="form-label text-muted">Show Code</label>
                    <input class="form-check-input code-switcher" type="checkbox" id="default-showcode">
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body">
            <p class="text-muted">Use <code>table</code> class to show bootstrap-based default table.</p>
            <div class="live-preview">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <a href="{{route('products.show',$product->id)}}">
                                            <button type="button"
                                                class="btn rounded-pill btn-primary waves-effect waves-light"><i
                                                    class="ri-eye-line"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn rounded-pill btn-secondary waves-effect waves-light"><i
                                                class="ri-edit-fill"></i></button>
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn rounded-pill btn-danger waves-effect waves-light"><i
                                                class=" ri-delete-bin-fill
"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end card-body -->
        <!-- end col -->

    </div>
@endsection
