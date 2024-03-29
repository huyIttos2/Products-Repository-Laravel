@extends('layout.base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a Product</h1>
            <div>
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div><br />--}}
{{--                @endif--}}
                <form method="post" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Name</label>
                        <input type="text" class="form-control" name="name"/>
                        @if($errors->has('name'))
                            <p>{{ $errors -> first('name') }}</p>
                            @endif
                    </div>

                    <div class="form-group">
                        <label for="last_name">Producer</label>
                        <input type="text" class="form-control" name="producer"/>
                        @if($errors->has('producer'))
                            <p>{{ $errors -> first('producer') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Price</label>
                        <input type="number" class="form-control" name="price"/>
                        @if($errors->has('price'))
                            <p>{{ $errors -> first('price') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="city">Quantity</label>
                        <input type="number" class="form-control" name="quantity"/>
                        @if($errors->has('quantity'))
                            <p>{{ $errors -> first('quantity') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="country">Description</label>
                        <textarea type="text" class="form-control" name="description">
                        </textarea>
                        @if($errors->has('description'))
                            <p>{{ $errors -> first('description') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Add product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
