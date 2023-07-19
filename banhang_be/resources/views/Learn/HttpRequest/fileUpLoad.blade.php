@extends('trangchu')
@section('content')
    <br>
    <div class="container">
        @if (isset($err))
            <small class="text-danger">{{ $err }}</small>
        @endif
        <h1>Register</h1>
        <section class="form-box">
            <form class="col-md-5" action="/fileUpLoad" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" value="{{ old('name') }}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">
                        Password
                    </label>
                    <input type="password" name="password" value="{{ old('password') }}" id="password"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="photo">Attach a photograph</label>
                    <input type="file" name="photo" id="photo" value="{{ 'photo' }}" accept="image/*"
                        class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
                @csrf
            </form>
        </section>
        <div style="display: flex; flex-wrap:wrap; gap:60px; justify-content:center;">
            <div class="black-border w-5 h-5" style="width: 100px; height:100px; border: solid;"></div>
            <div class="black-border w-5 h-5" style="width: 100px; height:100px; border: solid;"></div>
            <div class="black-border w-5 h-5" style="width: 100px; height:100px; border: solid;"></div>
            <div class="black-border w-5 h-5" style="width: 100px; height:100px; border: solid;"></div>
            <div class="black-border w-5 h-5" style="width: 100px; height:100px; border: solid;"></div>
            <div class="black-border w-5 h-5" style="width: 100px; height:100px; border: solid;"></div>
            <div class="black-border w-5 h-5" style="width: 100px; height:100px; border: solid;"></div>
            <div class="black-border w-5 h-5" style="width: 100px; height:100px; border: solid;"></div>
        </div>
    </div>
    <br>
@endsection
