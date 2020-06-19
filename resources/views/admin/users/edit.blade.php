@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user: <b>{{ $users->name }}</b></div>

                <div class="card-body">
                    <form action="{{ route('users.update', $users->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="task-name" class="label">Role</label>
                            <div class="">
                                <input type="text" name="role" class="form-control" value="{{ $users->role }}">
                            </div><br>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                                <button onclick="{{ route('users.index') }}" class="btn btn-warning">Back</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
