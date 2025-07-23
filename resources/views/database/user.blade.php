<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 0.75rem;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Users</h1>
    <div>index</div>
    {{-- Show message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div> <a href="{{ route('user.create') }}"> Add New User</a> </div>
    {{-- User table --}}
    <h1>User List</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Avatar</th>
                <th>Student ID</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                @if (isset($userId) && $userId == $user->id)
                    <form method="POST" action="{{ route('user.update', ['user' => $user]) }}">
                        @csrf
                        @method('PUT')
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td><input type="text" name="name" value="{{ $user->name }}"></td>
                            <td><input type="email" name="email" value="{{ $user->email }}"></td>
                            <td><input type="text" name="phone" value="{{ $user->phone }}"></td>
                            <td><input type="text" name="avatar" value="{{ $user->avatar }}"></td>
                            <td><input type="text" name="student_id" value="{{ $user->student_id }}"></td>
                            <td>{{ date('Y-m-d', strtotime($user->created_at)) }}</td>
                            <td colspan="2">
                                <button type="submit">Save</button>
                                <a href="{{ route('user.index') }}">Cancel</a>
                            </td>
                        </tr>
                    </form>
                @else
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td><img src="{{ $user->avatar }}" width="50"></td>
                        <td>{{ $user->student_id }}</td>
                        <td>{{ date('Y-m-d', strtotime($user->created_at)) }}</td>
                        <td>
                            <form method="GET" action="{{ route('user.index') }}">
                                <input type="hidden" name="userId" value="{{ $user->id }}">
                                <button type="submit">Edit</button>
                            </form>
                            <form method="POST" action="{{ route('user.delete', ['user' => $user]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td colspan="9">No users found.</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</body>

</html>
