<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <div class="cards-container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2> {{ $movie['original_title'] }} </h2>
                    <h4> {{ $movie['title'] }} </h4>
                    <p> Country: {{ $movie['nationality'] }} </p>
                    <p> Year: {{ $year = date('Y', strtotime($movie['date'])) }} </p>
                    <p> Vote: {{ $movie['vote'] }} </p>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
