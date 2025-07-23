<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: 1rem;
            justify-self: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            width: 500px;
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .success {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>
        ADD New User
    </h2>
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        @method('POST')
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="text" name="avatar" placeholder="Avatar URL">
        <input type="text" name="student_id" placeholder="Student ID" required>
        <input type="submit" value="Add User">
    </form>

    {{-- Show message --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>
