@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Product Manager</h1>
                </div>

                <div class="panel-body">
                    <form action="/products" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="qoh">Quantity In Stock:</label>
                            <input type="text" class="form-control" name="qoh" id="qoh">
                        </div>

                        <div class="form-group">
                            <label for="price_per_item">Price Per Item:</label>
                            <input type="text" class="form-control" name="price_per_item" id="price_per_item">
                        </div>

                        <button type="submit" class="btn btn-default">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
