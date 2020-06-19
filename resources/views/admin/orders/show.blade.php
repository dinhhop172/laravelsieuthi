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
        <tr>
            <td>ID</td>
            <td>{{ trans('order.label.customid') }}</td>
            <td>{{ trans('order.label.date') }}</td>
            <td>{{ trans('order.label.totalPrice') }}</td>
        </tr>
        <tr>
            <td>{{ $orders->id }}</td>
            <td>{{ $orders->customer_id }}</td>
            <td>{{ $orders->date }}</td>
            <td>{{ $orders->totalPrice }}</td>
        </tr>
    </table>
</body>
</html>
