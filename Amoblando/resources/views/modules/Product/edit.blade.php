@extends('layouts.admin.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('SofaCama.update',$products->product_id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mt-5">
                        <label for="name_product">NOMBRE DEL PRODUCTO</label>
                        <input name="name_product" id="name_product" type="text" class="form-control" value="{{$products->name_product}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="price">PRECIO</label>
                        <input name="price" id="price" type="text" class="form-control"value="{{$products->price}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="description">DESCRIPCION</label>
                        <input name="description" id="description" type="text" class="form-control" value="{{$products->description}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="create_date">FECHA DE CREACION</label>
                        <input name="create_date" id="create_date" type="date" class="form-control" value="{{$products->create_date}}">
                    </div>
                    <div class="form-group mt-5">
                        <label for="fk_category_id">CATEGORIA</label>
                        <input name="fk_category_id" id="fk_category_id" type="text" class="form-control" value="{{$products->fk_category_id}}">
                    </div>



                    <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    <a href="{{ route('product.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

@endsection



