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
    <form action="{{ route('customers.update', $customers->id) }}" method="post">
        @csrf
        @method('PUT')
        Name: <br><input type="text" name="name" value="{{ $customers->name }}"><br>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong><br>
            </span>
        @endif

        Age: <br><input type="text" name="age" value="{{ $customers->age }}"><br>
        @if ($errors->has('age'))
            <span class="help-block">
                <strong>{{ $errors->first('age') }}</strong><br>
            </span>
        @endif
        Email: <br><input type="text" name="mail" value="{{ $customers->mail }}"><br>
        @if ($errors->has('mail'))
            <span class="help-block">
                <strong>{{ $errors->first('mail') }}</strong><br>
            </span>
        @endif
        <input type="submit" name="sm" value="Update">
    </form>
</body>
</html> --}}
<!-- add modal -->
<div class="modal fade" id="editcustomer{{$customer->id}}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit brand</h5>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('customer.label.name') }}</label>
                        <div class="">
                            <input type="text" name="name" class="form-control" value="{{ $customer->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('customer.label.mail') }}</label>
                        <div class="">
                            <input type="text" name="mail" class="form-control" value="{{ $customer->mail }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">
                            Edit Brand
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
