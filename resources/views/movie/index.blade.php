<!DOCTYPE html>
<html>
<head>
    <title>Movies List</title>
</head>
<body>
    <h1>Movies</h1>
    <a href="/movie/create">tambah movie</a>
    <ul>
        @foreach($movie as $movie)
        <li>
            
    {{ $movie->title }} ({{ $movie->genre }}) - {{ $movie->rating }}- ({{ $movie->description }})
                <form action="/movies/{{ $movie->id }}" method="POST" style="display:inline;">
                    @csrf
                </form>
            </tb>
            </li>
        @endforeach
    </ul>
</body>
</html>
