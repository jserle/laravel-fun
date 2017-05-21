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
                            <input type="text" class="form-control" name="product_name" id="product_name">
                        </div>

                        <button type="submit" class="btn btn-default">Reply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
