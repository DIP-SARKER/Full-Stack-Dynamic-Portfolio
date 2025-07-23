<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiences</title>
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

        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>
    <h2>💼 Experiences</h2>

    {{-- Show success message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    {{-- Add Experience Link --}}
    <div>
        <a href="{{ route('experience.create') }}">➕ Add New Experience</a>
    </div>

    {{-- Experience Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Type</th>
                <th>Designation</th>
                <th>Organization</th>
                <th>From</th>
                <th>To</th>
                <th>Created</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($experiences as $exp)
                <tr>
                    <td>{{ $exp->id }}</td>
                    <td>{{ $exp->user_id }}</td>
                    <td>{{ $exp->type }}</td>
                    <td>{{ $exp->designation }}</td>
                    <td>{{ $exp->organization }}</td>
                    <td>{{ $exp->from_date }}</td>
                    <td>{{ $exp->to_date ?? 'Present' }}</td>
                    <td>{{ date('Y-m-d', strtotime($exp->created_at)) }}</td>
                    <td><a href="{{ route('experience.edit', ['experience' => $exp->id]) }}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('experience.delete', ['experience' => $exp->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="tdempty">No experience information found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
