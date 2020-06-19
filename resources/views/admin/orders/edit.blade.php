<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('orders.update', $orders->id) }}" method="post">
        @csrf
        @method('PUT')
        Date: <br><input type="text" name="date" value="{{ $orders->date }}"><br>
        Total Price: <br><input type="text" name="totalprice" value="{{ $orders->totalPrice }}"><br>

        @php
            $customers = App\Models\Customer::all();
        @endphp
        <label for="">{{ trans('order.label.name') }}</label><br>
        <select name="customer_id" id="">
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
        <input type="submit" name="sm" value="Update">
    </form>
</body>
</html>
