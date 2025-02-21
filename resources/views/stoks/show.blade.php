<!DOCTYPE html>
<html>
<head>
    <title>Stok List</title>
</head>
<body>
    <h1>Stoks</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <a href="{{ route('stoks.create') }}">Add Stok</a>
    <ul>
        @foreach ($stoks as $stok)
            <li>
                {{ $stok->nama }} -
                <a href="{{ route('stoks.edit', $stok) }}">Edit</a>
                <form action="{{ route('stoks.destroy', $stok) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
