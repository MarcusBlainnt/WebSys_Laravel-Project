@extends('template.dashboard')

@section('title', 'Edit')
@section('content'),

<div class="card">
        <div class="card-body">
            
            <form action="{{url('/admin/'.$product->id)}}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $product->id }}" id="id" />
                <label>Product Image</label></br>
                <input type="text" name="product_img" id="name" value="{{ $product->product_img }}" class="form-control"></br>
                <label>Product Name </label></br>
                <input type="text" name="product_name" id="image" value="{{ $product->product_name }}" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="text" value="{{ $product->price }}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        
        </div>
        </div>

@endsection