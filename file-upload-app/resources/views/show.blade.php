<!DOCTYPE html>
<html>
<head>
    <title>Show User</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>User Details</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $user->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <P><strong>Id:</strong> {{$user->id}}</P>
            <p><strong>Created At:</strong> {{ $user->created_at->format('d/m/Y') }}</p>
            <p><strong>Updated At:</strong> {{ $user->updated_at->format('d/m/Y') }}</p>
            @if($user->file_path)
                <p><strong>File:</strong> <a href="{{ Storage::url($user->file_path) }}" target="_blank">Download</a></p>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
</body>
</html>
