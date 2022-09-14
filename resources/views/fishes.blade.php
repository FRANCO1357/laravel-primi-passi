<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishes</title>
</head>
<body>

<h1>Specie di pesci</h1>

<ul>
    @foreach($fish_breeds as $fish_breed)
    <li>{{ $fish_breed }}</li>
    @endforeach
</ul>
    
</body>
</html>