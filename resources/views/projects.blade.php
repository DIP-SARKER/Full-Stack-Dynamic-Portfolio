@extends('db')

@section('title', 'Projects')

@section('table-content')
    <h2>🏗️ Project List</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Tools</th>
                <th>Keywords</th>
                <th>GitHub</th>
                <th>Demo</th>
                <th>Images</th>
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
                    <td>{{ implode(', ', json_decode($project->tools)) }}</td>
                    <td>{{ $project->keywords ? implode(', ', json_decode($project->keywords)) : '-' }}</td>
                    <td><a href="{{ $project->github_url }}" target="_blank">GitHub</a></td>
                    <td><a href="{{ $project->demo_url }}" target="_blank">Demo</a></td>
                    <td>
                        @foreach (json_decode($project->images) as $img)
                            <img src="{{ $img }}" width="50" height="50" alt="img">
                        @endforeach
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10"class="tdempty">No projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
