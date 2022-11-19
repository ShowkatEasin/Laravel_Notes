<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Product</h1>
    <table border="1">
        <tr>
            <th>SL No.</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Status</th>
            <th colspan="2">Action</th>
        </tr>
        @php $sl=1 @endphp
        @foreach ($products as $product )
            <tr>
                <td>{{ $sl }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->des }}</td>
                <td>@if ($product->status==1) Active @else Inactive @endif</td>
                <td><a href="#">Edit</a></td>
                <td><a href="{{ route('delete',$product->id) }}">Delete</a></td>
            </tr>
            @php $sl++ @endphp
        @endforeach
    </table>
</body>
</html>