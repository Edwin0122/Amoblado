@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class="btn btn-primary mt-4 mb-3" href="{{ route('product.create') }}">AGREGAR NUEVO PRODUCTO</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nº</th>
                            <th>PRODUCTO</th>
                            <th>PRECIO</th>
                            <th>DESCRIPCION</th>
                            <th>FECHA DE CREACION</th>
                            <th>CATEGORIA</th>

                            <th>OPCIONES</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($products  as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name_product}}</td>
                                <td>{{ $product->price}}</td>
                                <td>{{ $product->description}}</td>
                                <td>{{ $product->create_date}}</td>
                                <td>{{ $product->fk_category_id}}</td>


                                <td>
                                    <form action="{{route('product.destroy',$product->product_id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('product.show',$product->product_id) }}" class="btn btn-sm btn-info">Detalles</a>
                                        <a href="{{route('product.edit',$product->product_id)}}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
