<!DOCTYPE html>
<html>
<head>
    <title>Film</title>
</head>
<body>
    <div class="movies">
        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie->title }}</h2>
                <p>{{ $movie->original_title }}</p>
                <p>{{ $movie->nationality }}</p>
                <p>{{ $movie->date }}</p>
                <p>{{ $movie->vote }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>

