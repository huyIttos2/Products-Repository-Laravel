
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
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->producer}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td><textarea name="" id="" cols="25" rows="5">{{$product->description}}</textarea></td>
                    </tr>
                </tbody>
            </table>
            {{--            {{$products->links()}}--}}
        </div>
    </div>
@endsection
