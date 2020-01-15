@extends('layout.master')
@section('title','Register Page')

@section('content')
    <div class="container col-md-6 col-md-offset-3 mt-5">

        <div class="card card-body">

            <form action="" method="post">

                <legend>Register Form</legend>
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="name" id="username" placeholder="user name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <label for="username">Confirm Password </label>
                    <input type="password" class="form-control" id="username" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary pull-right">Register</button>
            </form>
        </div>

    </div>

@endsection()