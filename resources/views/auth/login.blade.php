@extends('layouts.home')

@section('title', 'Login')

@section('content')

    <h3 class="text-center">Login</h3>

    <div class="col-sm-6 col-sm-offset-3">
        <form method="POST" action="{{route('login')}}">
            @csrf

            <div class="form-group">
                <label for="username">Username:
                    <span class="errors">{{$errors->has('username') ? $errors->first('username') : ''}}</span>
                </label>
                <input type="text" name="username" value="{{old('username')}}" class="form-control" id="username">
            </div>

            <div class="form-group">
                <label for="password">Password:
                    <span class="errors">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                </label>
                <input type="password" name="password" class="form-control" id="password">
            </div>

            <div class="checkbox">
                <label><input type="checkbox" name="remember" {{old('remember') ? 'checked' : ''}}> Remember me</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Login</button>


                <div class="text-center">
                    <a class="btn btn-link" href="{{route('password.request')}}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection