<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    @stack('style')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background-color: #f9f9f9;
            text-align: center;
        }

        header {
            background-color: #333;
            padding: 1rem 0;
        }

        .db-nav-links {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 0;
            padding: 0;
        }

        .db-nav-links li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }

        h1,
        h2 {
            color: #333;
        }

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
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

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

        img {
            border-radius: 5px;
        }

        strong {
            color: blue;
        }

        .tdempty {
            text-align: center;
        }

        .db-nav-links li a.list-active {
            border: 1px dashed #ffffff;
        }
    </style>


</head>

<body>

    <!-- Header -->
    <header id="header">
        <nav>
            <ul class="db-nav-links">
                <li><a href="{{ route('users.index') }}">Users</a></li>
                <li><a href="{{ route('personal.details') }}">Personal Details</a></li>
                <li><a href="{{ route('skills.index') }}">Skills</a></li>
                <li><a href="{{ route('educations.index') }}">Education</a></li>
                <li><a href="{{ route('projects.index') }}">Projects</a></li>
                <li><a href="{{ route('achievements.index') }}">Achievements</a></li>
                <li><a href="{{ route('experiences.index') }}">Experiences</a></li>
            </ul>
        </nav>
    </header>
    <h1>
        Connected to database: <strong>{{ DB::connection()->getDatabaseName() }}</strong>
    </h1>`
    <!-- Main Content -->
    <main>
        @yield('table-content')
    </main>

    @stack('scripts')
</body>
<script src="{{ asset('assets/js/dbextra.js') }}"></script>

</html>
