<!DOCTYPE html>
<html>
<head>
    <title>Edit Stok</title>
</head>
<body>
    <h1>Edit Stok</h1>
    <form action="{{ route('stoks.update', $stok) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $stok->nama }}" required>
        <br>
        <label for="kondisi">Kondisi:</label>
        <textarea name="kondisi" required>{{ $stok->kondisi }}</textarea>
        <br>
        <button type="submit">Update Stok</button>
    </form>
    <a href="{{ route('stoks.index') }}">Back to List</a>
</body>
</html>