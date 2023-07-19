@extends('TrangChu')
@section('content')
    <table class="table">
        <tr>
            <th>User</th>
            <th>content</th>
        </tr>
        <tr>
            <td>{{ $user }}</td>
            <td>{{ $content }}</td>
        </tr>

    </table>
@endsection
