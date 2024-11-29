<!DOCTYPE html>
<html>
<head>
    <title>Add Movie</title>
</head>
<body>
    <h1>tambah movie</h1>
    <form action="/movie" method="POST">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title"><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br>
        <label>Genre:</label><br>
        <input type="text" name="genre"><br>
        <label>Rating:</label><br>
        <input type="number" step="0.1" name="rating"><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>
