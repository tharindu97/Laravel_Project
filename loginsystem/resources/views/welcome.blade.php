@extends('layout.main')

@section('title')

    Welcome Page

@endsection()

@section('body')

    <div class="row my-5">
        <div class="col-md-6">

        @if ($errors->any())
        
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
           
        @endif
        
       

            <h1>Register Now</h1>

            <form method="post" action="{{ route('signup') }}">
                
                <div class="form-group">
                    <label for="exampleInputFirstName">First Name</label>
                    <input type="text" name="firstname" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputlastName">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="exampleInputlastName" aria-describedby="emailHelp" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
                {{ csrf_field() }}
            </form>

        </div>

        <div class="col-md-6">

            <h1>Login</h1>

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
    
@endsection()