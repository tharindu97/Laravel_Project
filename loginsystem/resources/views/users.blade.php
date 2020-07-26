@extends('layout.main')

@section('title')

    <h1>Users Register page</h1>

@endsection()

@section('body')
0
    <div class="my-5">

        <form action="/register" method="post">

            {{ csrf_field() }}

            <label for="">Name: </label>
            <input type="text" name="name" id=""><br><br>

            <label for="">Email: </label>
            <input type="email" name="email" id=""><br><br>

            <label for="">Password: </label>
            <input type="password" name="password" id=""><br><br>

            <input type="submit" value="Regiter Now">

        </form>
    </div>
    
@endsection()
