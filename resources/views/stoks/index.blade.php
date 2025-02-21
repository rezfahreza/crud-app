<!DOCTYPE html>
<html>
<head>
    <title>Stoks List</title>
</head>
<body>
    <h1>Stoks</h1>
    @if (@session('success'))
        <p>{{session('succes')}}</p>
    @endif
    <a href="{{route('stoks.create')}}">Add Stoks</a>
    <ul>
        @foreach ($stoks as $stok)
            <li>
                {{$stok->nama}} -
                <a href="{{route('stoks.edit', $stok)}}">Edit</a>
                <form action="{{rote('stoks.destroy', $stok)}}" method="POST" style="display:inline;"></form>
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </li>
        @endforeach
    </ul>
</body>
</html>