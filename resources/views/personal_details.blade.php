@extends('db')

@section('title', 'Personal Details')

@section('table-content')


    {{-- Success Message --}}
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    <h2>Personal Details</h2>
    {{-- Details Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Description</th>
                <th>Blood Group</th>
                <th>Department</th>
                <th>Age</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($details as $detail)
                <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->user_id }}</td>
                    <td>{{ $detail->description }}</td>
                    <td>{{ $detail->blood_group }}</td>
                    <td>{{ $detail->department }}</td>
                    <td>{{ $detail->age }}</td>
                    <td>{{ date('Y-m-d', strtotime($detail->dob)) }}</td>
                    <td>{{ $detail->address }}</td>
                    <td>{{ ucfirst($detail->gender) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9"class="tdempty">No personal details found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
