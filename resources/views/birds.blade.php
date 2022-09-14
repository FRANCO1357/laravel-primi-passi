<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds</title>
</head>
<body>

<h1>Specie di volatili</h1>

<ul>
    @forelse($bird_breeds as $bird_breed)
    <li>{{ $bird_breed }}</li>
    @empty
    <li>Nessuna Specie</li>
    @endforelse
</ul>
    
</body>
</html>