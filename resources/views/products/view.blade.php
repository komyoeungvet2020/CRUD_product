@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Value</th>
                            </tr>
                            <tr>
                                <td>{{$products->name}}</td>
                                <td>{{$products->price}}</td>
                                <td> <strong>Size: </strong>{{$products->value['size']}} <strong>Color: </strong>{{$products->value['color']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
