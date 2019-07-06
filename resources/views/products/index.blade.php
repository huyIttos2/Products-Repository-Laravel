@extends('layout.base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Products</h1>
            <a href="{{route('products.create')}}" class="btn btn-primary">Add</a>
            <input type="submit" name="action" value="Back" onclick="window.history.back();" class="btn btn-primary">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Producer</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Description</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $product)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->producer}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td><textarea name="" id="" cols="25" rows="5">{{$product->description}}</textarea></td>
                        <td>
                            <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-primary">Details</a>
                            <a href="{{route('products.delete',$product->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$products->links()}}
        </div>
            </div>
@endsection