@extends('layout.base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <caption align="center"> <h1 class="display-3" >Are you sure delete {{$product -> name}}</h1></caption>
           <div style="margin-top: 15px" class="col">
               <a href="{{route('products.destroy',$product->id)}}" style="float:left" class="btn btn-danger">Yes</a>
               <input type="submit" name="action" value="No" onclick="window.history.back();" class="btn btn-primary" style="float: right">
           </div>
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
        </div>
    </div>
@endsection