@extends('layouts.app')
<link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header" style="text-align: center">Update</div>
                <div class="card-body">
                    <form action="{{route('home.update',$products->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group mb-2">
                            <input type="text" name="name" id="" value="{{$products->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="price" id="" value="{{$products->price}}" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="key" id="" value="{{$products->key}}" class="form-control">
                        </div>
                        <label for="">Value</label>
                        <div class="form-group mb-2">
                            <input type="text" name="value[size]" id="" value="{{$products->value['size']}}" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="value[color]" id="" value="{{$products->value['color']}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection
