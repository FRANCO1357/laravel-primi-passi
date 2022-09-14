<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogs</title>
</head>
<body>

<h1>Razze di cani</h1>

<ul>
    @foreach($dog_breeds as $dog_breed)
    <li>{{ $dog_breed }}</li>
    @endforeach
</ul>
    
</body>
</html>