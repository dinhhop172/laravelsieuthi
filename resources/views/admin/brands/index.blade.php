@extends('layouts.admin')



@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Brand Table: {{ $productbrands->count() }} rows</h6>
        <button style="float: right; margin-top: -20px" type="btn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addbrand">
        <i class="fas fa-plus"></i> Add Brand
        </button>
        @include('admin.brands.create')
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Create at</th>
                      <th>Update at</th>
                      <th>Act</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productbrands as $productbrand)
                    <tr>
                        <td>{{ $productbrand->id }}</td>
                        <td>{{ $productbrand->name }}</td>
                        <td>{{ $productbrand->created_at }}</td>
                        <td>{{ $productbrand->updated_at }}</td>
                        <td>
                            <div class="row">
                                <div>
                                    <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#editbrand{{ $productbrand->id }}">
                                        Edit
                                    </button>
                                    @include('admin.brands.edit')
                                </div>
                                <form action="{{ route('productbrands.destroy', $productbrand->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning mg" data-toggle="modal">
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
{{-- <div class="margin">
    <div class="row">
        <div class="col-lg-6">
            <br>
            <h4>{{$productbrands->count()}} Brand</h4>
        </div> --}}

        {{-- /\add modal\\\\ --}}
        {{-- <div class="col-lg-6 left">
            <div style="margin-top:20px">
                <button type="btn" class="btn btn-success btn-lg" data-toggle="modal" data-target="#addModal">
                    <i class="fas fa-plus"></i> Add Brand
                </button>
            </div> --}}
            {{-- add modal --}}
            {{-- @include('admin.brands.create')
        </div>
    </div>
    <table>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Create at</td>
                <td>Update at</td>
                <td>Act</td> --}}
                {{-- <td><a href="{{ route('productbrands.create') }}">Create</a></td> --}}
            {{-- </tr>
            @foreach ($productbrands as $productbrand)
            <tr>
                <td>{{ $productbrand->id }}</td>
                <td>{{ $productbrand->name }}</td>
                <td>{{ $productbrand->created_at }}</td>
                <td>{{ $productbrand->updated_at }}</td>
                <td>
                    <div class="row">
                        <div class="margin-left"> --}}
                            {{-- button --}}
                            {{-- <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#editModal">
                                Edit
                            </button>
                            @include('admin.brands.edit')
                        </div>
                        <form action="{{ route('productbrands.destroy', $productbrand->id) }}" method="post">
                            @csrf
                            @method('DELETE') --}}
                            {{-- <input type="submit" value="Delete"> --}}
                            {{-- <button type="submit" class="btn btn-success mg" data-toggle="modal">
                                Delete
                            </button>
                        </form>
                    </div> --}}
                    {{-- <a href="{{ route('productbrands.edit', $productbrand->id) }}">Edit</a> --}}
{{--
                </td>
            </tr>
            @endforeach
    </table>
</div> --}}


