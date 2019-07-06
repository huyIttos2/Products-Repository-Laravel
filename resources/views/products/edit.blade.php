@extends('layout.base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a Product</h1>
            <div>
                <form method="post" action="{{ route('products.update',$product->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$product -> name}}"/>
                        @if($errors->has('name'))
                            <p>{{ $errors -> first('name') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="last_name">Producer</label>
                        <input type="text" class="form-control" name="producer" value="{{ $product -> producer }}"/>
                        @if($errors->has('producer'))
                            <p>{{ $errors -> first('producer') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $product->price }}"/>
                        @if($errors->has('price'))
                            <p>{{ $errors -> first('price') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="city">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}"/>
                        @if($errors->has('quantity'))
                            <p>{{ $errors -> first('quantity') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="country">Description</label>
                        <textarea cols="25" rows="5" type="text" class="form-control" name="description">{{$product -> description}}
                        </textarea>
                        @if($errors->has('description'))
                            <p>{{ $errors -> first('description') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

