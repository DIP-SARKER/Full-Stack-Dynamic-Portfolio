<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>
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

        .success {
            color: green;
            margin: 1rem 0;
        }

        .tdempty {
            text-align: center;
            font-style: italic;
        }
    </style>
</head>

<body>
    <h1>Skills</h1>
    <div>index</div>

    {{-- Show success message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <div><a href="{{ route('skill.create') }}">Add New Skill</a></div>

    {{-- Skills Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Level</th>
                <th>Logo</th>
                <th>Created</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->user_id }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ ucfirst($skill->type) }}</td>
                    <td>{{ ucfirst($skill->level) }}</td>
                    <td>
                        @if ($skill->logo)
                            <img src="{{ $skill->logo }}" alt="Logo" width="40">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ date('Y-m-d', strtotime($skill->created_at)) }}</td>
                    <td><a href="{{ route('skill.edit', ['skill' => $skill->id]) }}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('skill.delete', ['skill' => $skill->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="tdempty">No skills found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
