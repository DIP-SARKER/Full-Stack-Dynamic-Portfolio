<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Details</title>
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
    <h1>Personal Details</h1>
    <div>index</div>

    {{-- Show success message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <div><a href="{{ route('personal_detail.create') }}">Add New Detail</a></div>

    {{-- Personal Details Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Description</th>
                <th>Blood Group</th>
                <th>Department</th>
                <th>Age</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Created</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($p_details as $p_detail)
                <tr>
                    <td>{{ $p_detail->id }}</td>
                    <td>{{ $p_detail->user_id }}</td>
                    <td>{{ $p_detail->description ?? 'N/A' }}</td>
                    <td>{{ $p_detail->blood_group ?? 'N/A' }}</td>
                    <td>{{ $p_detail->department ?? 'N/A' }}</td>
                    <td>{{ $p_detail->age ?? 'N/A' }}</td>
                    <td>{{ $p_detail->dob ?? 'N/A' }}</td>
                    <td>{{ $p_detail->address ?? 'N/A' }}</td>
                    <td>{{ $p_detail->gender }}</td>
                    <td>{{ date('Y-m-d', strtotime($p_detail->created_at)) }}</td>
                    <td><a href="{{ route('personal_detail.edit', ['p_detail' => $p_detail]) }}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('personal_detail.delete', ['p_detail' => $p_detail]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12" class="tdempty">No personal details found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
