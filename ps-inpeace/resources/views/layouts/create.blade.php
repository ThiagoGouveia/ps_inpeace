<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input[type=submit]  {
        background-color: #ff0000;
        border: none;
        color: white;
        padding: 2px 4px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @livewireStyles
    <title>Document</title>
</head>
<body>
    <div class = "container">
        @yield('content')
        @livewireScripts
    </div>
    @yield('footer')
</body>
</html>
