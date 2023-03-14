@extends('template.dashboard')

@section('title', 'Create')
@section('content'),

        <div class="card">
        <div class="card-body">
            
            <form action="{{url('/admin')}}" method="post">
                {!! csrf_field() !!}
                <label>Product Image</label></br>
                <input type="text" name="product_img" id="text" class="form-control"></br>
                <label>Product Name</label></br>
                <input type="text" name="product_name" id="text" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="text" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        
        </div>
        </div>

@endsection