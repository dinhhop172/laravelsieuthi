<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('orders.store') }}" method="post">
        @csrf
        @method('POST')

        <label for="">{{ trans('order.label.date') }}</label><br>
        <input type="text" name="date"><br>
        @if ($errors->has('date'))
            <span class="help-block">
                <strong>{{ $errors->first('date') }}</strong><br/>
            </span>
        @endif

        <label for="">{{ trans('order.label.totalPrice') }}</label><br>
        <input type="text" name="totalPrice"><br>
        @if ($errors->has('totalPrice'))
            <span class="help-block">
                <strong>{{ $errors->first('totalPrice') }}</strong><br>
            </span>
        @endif

        @php
            $customers = App\Models\Customer::all();
        @endphp
        <label for="">{{ trans('order.label.name') }}</label><br>
        <select name="customer_id" id="">
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
        <input type="submit" name="sm" value="Insert">
    </form>
</body>
</html>
