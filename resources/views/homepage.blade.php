<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

<h1>Menu</h1>

<ul>
    <li><a href="{{ url('/dogs')}}">Razze di cani</a></li>
    <li><a href="{{ url('/cats')}}">Razze di gatti</a></li>
    <li><a href="{{ url('/fishes')}}">Specie di pesci</a></li>
    <li><a href="{{ url('/birds')}}">Specie di volatili</a></li>
</ul>
    
</body>
</html>