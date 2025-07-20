@extends('db')

@section('title', 'Achievements')

@section('table-content')
    <h2>🏅 Achievements</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Name</th>
                <th>Type</th>
                <th>Certification</th>
                <th>Organization</th>
                <th>Date</th>
                <th>Category</th>
                <th>Images</th>
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
                                <img src="{{ $img }}" width="50" height="50">
                            @endforeach
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="tdempty">No achievements found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
