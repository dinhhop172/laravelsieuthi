{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Price</td>
                    <td><a href="{{ route('products.create') }}">Create</a></td>
                    <td>Delete</td>
                </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->desc }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->price }}</td>
                    <td><a href="{{ route('products.edit', $product->id) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> --}}
@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Product Table: {{ $products->count() }} rows</h6>
        <button style="float: right; margin-top: -20px" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addproduct" id="open">
        <i class="fas fa-plus"></i> Add Product
        </button>
        @include('admin.products.create')
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>Brand Id</th>
                      <th>Act</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->desc }}</td>
                        <td><img src="{{ $product->image }}" width="120" height="120" /></td>
                        {{-- <td>{{ $product->image }}</td> --}}
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->product_brand_id }}</td>
                        <td>
                            <div class="row">
                                <div>
                                    <button type="submit" class="btn btn-info mg-l" data-toggle="modal" data-target="#editproduct{{$product->id}}">
                                        Edit
                                    </button>
                                    @include('admin.products.edit')
                                </div>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning mg-t" data-toggle="modal">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
