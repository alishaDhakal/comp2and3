@extends('component.layout')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row h2 justify-content-center text-dark mb-5">
            Admin Dashboard
        </div>
        @if(count($products))
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                I.D
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Length
                            </th>
                            <th>
                                Product Type
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>

                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->length}}</td>
                                <td>{{$product->product_type}}</td>
                                <td><button class="btn btn-primary"><a href="/product/editForm/{{$product->id}}" class="text-white">Edit</a></button>
                                    <form action="/product/delete/{{$product->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit"><a  class="text-white">Delete</a></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-center my-5">
                    {{$products->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        @else
            <div class="row m-5">
                <div class="col-12 bg-info text-white p-5 text-center h2">
                    No Product's Found
                </div>
            </div>
        @endif
    </div>
@endsection
