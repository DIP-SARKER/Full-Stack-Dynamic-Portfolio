<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Educations</title>
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
    <h1>Educations</h1>
    <div>index</div>

    {{-- Show success message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <div><a href="{{ route('education.create') }}">Add New Education</a></div>

    {{-- Educations Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Institute</th>
                <th>Enrolled Year</th>
                <th>Passing Year</th>
                <th>Grade</th>
                <th>Created</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($educations as $education)
                <tr>
                    <td>{{ $education->id }}</td>
                    <td>{{ $education->user_id }}</td>
                    <td>{{ $education->type }}</td>
                    <td>{{ $education->name }}</td>
                    <td>{{ $education->institute }}</td>
                    <td>{{ $education->enrolled_year }}</td>
                    <td>{{ $education->passing_year }}</td>
                    <td>{{ $education->grade }}</td>
                    <td>{{ date('Y-m-d', strtotime($education->created_at)) }}</td>
                    <td><a href="{{ route('education.edit', ['education' => $education->id]) }}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('education.delete', ['education' => $education->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="tdempty">No education records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
