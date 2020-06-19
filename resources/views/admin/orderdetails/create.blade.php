<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('orderdetails.store') }}" method="post">
        @csrf
        @method('POST')
        <label for="">Quantity</label>
        <input type="text" name="quantity">

        @php
            $orders = App\Models\Order::all();
        @endphp
        <select name="order_id" id="">
            @foreach ($orders as $order)
            <option value="{{ $order->id }}">{{ $order->name }}</option>
            @endforeach
        </select>
    </form>
</body>
</html>
