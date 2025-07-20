@extends('db')

@section('title', 'Skills')

@section('table-content')

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    <h2>Skills List</h2>
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
                            <img src="{{ $skill->logo }}" alt="logo" width="40">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ date('Y-m-d', strtotime($skill->created_at)) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7"class="tdempty">No skills found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
