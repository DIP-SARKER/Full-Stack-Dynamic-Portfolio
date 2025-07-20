@extends('db')

@section('title', 'Experiences')

@section('table-content')
    <h2>💼 Experiences</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Type</th>
                <th>Designation</th>
                <th>Organization</th>
                <th>From</th>
                <th>To</th>
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
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="tdempty">No Experience Information found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
