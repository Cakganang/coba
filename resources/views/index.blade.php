<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Locale: {{App::getLocale()}}</p>
    @if (Auth::check())
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>ID: {{ $id }}</p>
        <p>Role: {{ $user->role }}</p>
    @else  
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endif

    <table border='1px'>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Skor</th>
            <th>Actions</th>
        </tr>
        @foreach ($data as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>
                <a href="{{ route('show', $student->id) }}">{{ $student->name }}</a>
            </td>
            <td>{{ $student->score }}</td>
            <td>
                <form action="{{ route('edit', $student) }}" method="get">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
                <form action="{{ route('delete', $student) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    Current Page: {{ $data->currentPage() }} <br>
    Total Data: {{ $data->total() }} <br>
    Data per Page: {{ $data->perPage() }} <br>

    {{ $data->links('pagination::bootstrap-4') }}
</body>
</html>