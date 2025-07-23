<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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

        img {
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <h2>🏗️ Project List</h2>

    {{-- Show success message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    {{-- Add Project Link --}}
    <div>
        <a href="{{ route('project.create') }}">➕ Add New Project</a>
    </div>

    {{-- Projects Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Tools</th>
                <th>Keywords</th>
                <th>GitHub</th>
                <th>Demo</th>
                <th>Images</th>
                <th>Created</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->user_id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->type }}</td>
                    <td>{{ $project->status }}</td>
                    <td>
                        @php $tools = json_decode($project->tools, true); @endphp
                        {{ $tools ? implode(', ', $tools) : 'N/A' }}
                    </td>
                    <td>
                        @php $keywords = json_decode($project->keywords, true); @endphp
                        {{ $keywords ? implode(', ', $keywords) : 'N/A' }}
                    </td>
                    <td>
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank">GitHub</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if ($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank">Demo</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @php $images = json_decode($project->images, true); @endphp
                        @if ($images && is_array($images))
                            @foreach ($images as $img)
                                <img src="{{ $img }}" width="50" height="50" alt="image">
                            @endforeach
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ date('Y-m-d', strtotime($project->created_at)) }}</td>
                    <td><a href="{{ route('project.edit', ['project' => $project->id]) }}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('project.delete', ['project' => $project->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="13" class="tdempty">No projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
