<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SAR project</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <style>

    body {
        background-color: #F8F8F8;
        font-family: 'Helvetica Neue', sans-serif;
    }

    .navbar-toggler-icon {
        display: none;
    }

    .rectangle {
        height: 50px;
        width: 100%;
        background-color: #11101D;
        color: #fff;
    }
    
    h2 {
        margin-top: 50px;
        margin-bottom: 30px;
        font-weight: bold;
        color: #292C33;
    }

    .container {
        margin-top: 50px;
        margin-bottom: 50px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 30px;
    }
</style>
</head>
<body>
<div class="rectangle"></div>
<div class="container">
    <h2>Employee managment</h2>
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
</body>
</html>
