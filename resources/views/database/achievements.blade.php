<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 1rem;
        }

        h2 {
            margin-bottom: 1rem;
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
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .success {
            color: green;
            margin: 1rem 0;
        }

        .tdempty {
            text-align: center;
            font-style: italic;
        }

        img {
            margin: 2px;
            border-radius: 4px;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>
    <h2>🏅 Achievements</h2>

    {{-- Flash Success Message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    {{-- Add New Achievement Link --}}
    <div>
        <a href="{{ route('achievement.create') }}">➕ Add New Achievement</a>
    </div>

    {{-- Achievements Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Certification</th>
                <th>Organization</th>
                <th>Date</th>
                <th>Category</th>
                <th>Images</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($achievements as $achievement)
                <tr>
                    <td>{{ $achievement->id }}</td>
                    <td>{{ $achievement->user_id }}</td>
                    <td>{{ $achievement->name }}</td>
                    <td>{{ $achievement->type }}</td>
                    <td>{{ $achievement->certification ?? '-' }}</td>
                    <td>{{ $achievement->organization }}</td>
                    <td>{{ \Carbon\Carbon::parse($achievement->date)->format('Y-m-d') }}</td>
                    <td>{{ $achievement->category }}</td>
                    <td>
                        @if ($achievement->images)
                            @foreach (json_decode($achievement->images) as $img)
                                <img src="{{ $img }}" width="50" height="50" alt="achievement">
                            @endforeach
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('achievement.edit', ['achievement' => $achievement->id]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST"
                            action="{{ route('achievement.delete', ['achievement' => $achievement->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="tdempty">No achievements found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
