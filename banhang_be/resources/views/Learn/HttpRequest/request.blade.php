@extends('TrangChu')
@section('content')
    <div class="d-flex justify-content-center">
        <form action="/file" method="post" class="rounded">
            @csrf

            <label for="photo">file:</label> <br>
            <input type="file" name="photo" id="photo" accept="image/*" />
            <br>
            <br>
            <input type="submit" value="POST" />
        </form>
        {{-- @if (isset($old))
            <h1>old userName : {{ $old }}</h1>
        @endif --}}
    </div>
@endsection
