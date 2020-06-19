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
            <td>{{ trans('customer.label.name') }}</td>
            <td>{{ trans('customer.label.age') }}</td>
            <td>{{ trans('customer.label.mail') }}</td>
        </tr>
        <tr>
            <td>{{ $customers->id }}</td>
            <td>{{ $customers->name }}</td>
            <td>{{ $customers->mail }}</td>
        </tr>
    </table>
</body>
</html>

