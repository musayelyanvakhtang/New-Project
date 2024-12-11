<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f9f9f9;
        color: #333;
    }
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: #fff;
    }
    thead {
        background-color: #4CAF50;
        color: #fff;
    }
    thead th {
        padding: 15px;
        text-align: left;
    }
    tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
    tbody tr:nth-child(even) {
        background-color: #fff;
    }
    tbody td {
        padding: 12px 15px;
    }
    tbody tr:hover {
        background-color: #d4edda;
    }
    .price {
        text-align: right;
        font-weight: bold;
    }
</style>
</head>
<body>
<h1 style="text-align: center;">Menu products</h1>
<table>
    <thead>
        <tr>
            <th>Product name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $key => $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td class="price">{{$product->price}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

