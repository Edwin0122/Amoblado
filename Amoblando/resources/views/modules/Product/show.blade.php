@extends('layouts.admin.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $products->product_id }}</td>
                        </tr>
                        <tr>
                            <th>NOMBRE DEL PRODUCTO</th>
                            <td>{{ $products->name_product }}</td>
                        </tr>
                        <tr>
                            <th>PRECIO</th>
                            <td>{{ $products->price }}</td>
                        </tr>
                        <tr>
                            <th>DESCCRIPCION</th>
                            <td>{{ $products->description }}</td>
                        </tr>
                        <tr>
                            <th>FECHA DE CREACION</th>
                            <td>{{ $products->create_date }}</td>
                        </tr>
                        <tr>
                            <th>CATEGORIA</th>
                            <td>{{ $products->fk_category_id }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary btn-sm" href="{{ route('product.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>




@endsection
