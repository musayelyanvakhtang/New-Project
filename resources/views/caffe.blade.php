<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caffe</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-top: 40px;
    }

    .table-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }

    .table-card {
        background-color: #fff;
        padding: 20px;
        width: 200px;
        height: 200px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .table-card:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .table-card.free {
        background-color: #a8e6cf; /* Зеленый */
    }

    .table-card.occupied {
        background-color: #ffccd5; /* Красный */
    }

    .table-card .status {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
    }

    .table-card .capacity {
        font-size: 16px;
        margin-top: 15px;
        color: #555;
    }

    .status.free {
        color: #388e3c;
    }

    .status.occupied {
        color: #d32f2f;
    }
</style>
</head>
<body>
<h1>Выберите столик</h1>
<div class="table-container">
    @foreach($tables as $table)
        <div class="table-card @if($table->status) occupied @else free @endif">
            <div class="status @if($table->status) occupied @else free @endif">
                @if($table->status == 'occupied')
                    Occupied
                @else
                    Free
                @endif
            </div>
            <div class="capacity">
                Вместимость: {{ $table->capacity }} Humen.
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
</html>
