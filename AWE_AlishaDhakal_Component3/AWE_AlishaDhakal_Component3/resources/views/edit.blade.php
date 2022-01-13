@extends('component.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card text-white bg-secondary">
                <div class="card-header">
                    <h5><h2>Edit Product</h2></h5>
                </div>
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <form action="/product/edit/{{$product->id}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title:</strong>
                                        <input type="text" name="title" value="{{ $product->title }}" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>First Name:</strong>
                                        <input type="text" name="firstname" value="{{ $product->firstname }}" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Last Name:</strong>
                                        <input type="text" name="lastname" value="{{ $product->lastname }}" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Price:</strong>
                                        <input type="number" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Pages/Durations:</strong>
                                        <input type="number" name="pgdur" value="{{ $product->pgdur }}" class="form-control" placeholder="Pages /Durations">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
