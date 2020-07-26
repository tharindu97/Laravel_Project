@extends('layout.main')

@section('title')

    <h1>Home Page</h1>

@endsection()

@section('body')

    <div class="my-5">
        <h2>Home Page</h2>
        <div>
            First Name : {{ Auth::user()->fist_name }}
        </div>
        <div>
            Last Name : {{ Auth::user()->last_name }}
        </div>
        <div>
            Email : {{ Auth::user()->email }}
        </div>
        <div>
            <a href="{{ route('signout') }}">Logout</a>
        </div>
    </div>

@endsection()
