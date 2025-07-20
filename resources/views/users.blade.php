@extends('db')

@section('title', 'User List')

@section('table-content')
    <h2>
        ADD New User
    </h2>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="text" name="avatar" placeholder="Avatar URL">
        <input type="text" name="student_id" placeholder="Student ID" required>
        <input type="submit" value="Add User">
    </form>
    {{-- Show success message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
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
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        @if ($user->avatar)
                            <img src="{{ $user->avatar }}" alt="avatar" width="50">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $user->student_id }}</td>
                    <td>{{ date('Y-m-d', strtotime($user->created_at)) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7"class="tdempty">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
