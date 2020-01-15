@extends('layout.master')
@section('title','Login')
@section('content')
    <div class="container col-md-6 col-md-offset-3 mt-5">
        <div class="card card-body bs-component">
            <form action="" method="post">
                <div class="form-group">
                    <legend>National Registation Login</legend>
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                   {{csrf_field()}}
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="checkbox">
                    <label for="">
                        <input type="checkbox" name="remember">Remember Me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary ">Login</button>

            </form>
        </div>
    </div>
    @endsection