@extends('layouts.app')
<link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header" style="text-align: center"><strong>CREATE</strong></div>
                <div class="card-body">
                    <form action="{{route('home.store')}}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <input type="text" name="name" id="" placeholder="Name" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="price" id="" placeholder="Price" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="key" id="" placeholder="Key" class="form-control" required>
                        </div>
                        <label for="">Value</label>
                        <div class="form-group mb-2">
                            <input type="text" name="value[size]" id="" placeholder="Size" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="value[color]" id="" placeholder="Color" class="form-control" required>
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
