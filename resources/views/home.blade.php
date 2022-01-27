@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{route('home.create')}}" class="btn btn-primary mb-3">Create</a>
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($products as $value)
                        <tr>
                            <td>{{$index++}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->price}}</td>
                            <td> <strong>Size: </strong>{{$value->value['size']}} <strong>Color: </strong>{{$value->value['color']}}</td>
                            <td style="display: flex">
                                <a href="{{route('home.edit',$value->id)}}" class="btn btn-secondary">Edit</a>
                                <a href="{{route('home.show',$value->id)}}" class="btn btn-info" style="margin-left: 10px">View</a>
                                <form action="{{route('home.destroy',$value->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="btn btn-danger" style="margin-left: 10px">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
