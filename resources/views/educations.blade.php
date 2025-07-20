@extends('db')

@section('title', 'Educations')

@section('table-content')
    <h2>🎓 Education Records</h2>
    {{-- Education Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Institute</th>
                <th>Enrolled</th>
                <th>Passed</th>
                <th>Grade</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($educations as $edu)
                <tr>
                    <td>{{ $edu->id }}</td>
                    <td>{{ $edu->user_id }}</td>
                    <td>{{ $edu->type }}</td>
                    <td>{{ $edu->name }}</td>
                    <td>{{ $edu->institute }}</td>
                    <td>{{ $edu->enrolled_year }}</td>
                    <td>{{ $edu->passing_year }}</td>
                    <td>{{ $edu->grade }}</td>
                    <td>{{ date('Y-m-d', strtotime($edu->created_at)) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="tdempty">No Education Information found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
