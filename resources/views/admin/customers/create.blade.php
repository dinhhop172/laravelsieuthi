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
<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    @method('POST')
    <label for="">{{ trans('customer.label.name') }}</label><br>
    <input type="text" name="name"><br>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong><br>
        </span>
    @endif

    <label for="">{{ trans('customer.label.age') }}</label><br>
    <input type="number" name="age"><br>
    @if ($errors->has('age'))
        <span class="help-block">
            <strong>{{ $errors->first('age') }}</strong><br>
        </span>
    @endif

    <label for="">{{ trans('customer.label.mail') }}</label><br>
    <input type="text" name="mail"><br>
    @if ($errors->has('mail'))
        <span class="help-block">
            <strong>{{ $errors->first('mail') }}</strong><br>
        </span>
    @endif

    <input type="submit" name="sm" value="Insert">
</form>
</body>
</html> --}}

<!-- add modal -->
<div class="modal fade" id="addcustomer" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add customer</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-window-close red"></i></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('customer.label.name') }}</label>
                        <div class="">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong><br>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('customer.label.mail') }}</label>
                        <div class="">
                            <input type="email" name="mail" class="form-control" required>
                        </div>
                        @if ($errors->has('mail'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mail') }}</strong><br>
                            </span>
                        @endif
                    </div>

                    <div class="modal-footer">
                            <button type="submit" class="btn btn-info">
                                Add Customer
                            </button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

