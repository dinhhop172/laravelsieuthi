<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Customer ID</td>
            <td>Date</td>
            <td>Toltal Price</td>
            <td><a href="{{ route('orders.create') }}">Create</a></td>
            <td>Delete</td>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->customer_id }}</td>
            <td>{{ $order->date }}</td>
            <td>{{ $order->totalPrice }}</td>
            <td><a href="{{ route('orders.edit', $order->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('orders.destroy', $order->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
