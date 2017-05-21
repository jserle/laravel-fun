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
                    <product-form></product-form>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Product List</h2>
                </div>

                <div class="panel-body">
                    <product-list></product-list>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
