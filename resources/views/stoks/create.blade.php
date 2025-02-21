<!DOCTYPE html>
<html>
<head>
    <title>Add Stok</title>
</head>
<body>
    <h1>Add Stoks</h1>
    <form action="{{ route('stoks.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="kondisi">Kondisi:</label>
        <textarea name="kondisi" required></textarea>
        <br>
        <button type="submit">Add Stok</button>
    </form>
    <a href="{{ route('stoks.index') }}">Back to list</a>
</body>
</html>