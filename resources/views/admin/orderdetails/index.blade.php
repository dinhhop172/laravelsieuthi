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
    <table>
        <caption><a href="{{ route('orderdetails.create') }}">Create</a></caption>
        <tr>
            <td>ID</td>
            <td>Order ID</td>
            <td>Product ID</td>
            <td>Quantity</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($orderdetails as $orderdetail)
        <tr>
            <td>{{ $orderdetail->id }}</td>
            <td>{{ $orderdetail->order_id }}</td>
            <td>{{ $orderdetail->product_id }}</td>
            <td>{{ $orderdetail->quantity }}</td>
            <td><a href="{{ route('orderdetails.edit', $orderdetail->id) }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
