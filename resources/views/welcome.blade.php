<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>

<body>
<div class="section">
    <div class="item"><a href="product">Menu</a></div>
    <div class="item"><a href="caffe">Caffe</a></div>
</div>

<style>
    a{
        text-decoration: none;
    }
    .section {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 50px;
    }

    .item {
        padding: 20px 40px;
        background-color: #3498db;
        color: white;
        font-size: 18px;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
    }

    .item:hover {
        background-color: #2980b9;
    }

    .item:active {
        background-color: #1c5982;
    }
</style>

</body>
</html>
