@extends('layouts.home')

@section('title', 'Register')

@section('content')

    <h3 class="text-center">Register</h3>

    <div class="col-sm-6 col-sm-offset-3">
        <form method="POST" action="{{route('register')}}">
            @csrf

            <div class="form-group">
                <label for="name">Name:
                    <span class="errors">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                </label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name">
            </div>

            <div class="form-group">
                <label for="username">Username:
                    <span class="errors">{{$errors->has('username') ? $errors->first('username') : ''}}</span>
                </label>
                <input type="text" name="username" class="form-control" value="{{old('username')}}" id="username">
            </div>

            <div class="form-group">
                <label for="email">Email address:
                    <span class="errors">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                </label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}" id="email">
            </div>

            <div class="form-group">
                <label for="password">Password:
                    <span class="errors">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                </label>
                <input type="password" name="password" class="form-control" id="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>

            <div class="form-group col-sm-6 col-sm-offset-3">
                <button type="submit" class="col-sm-12 btn btn-primary">Register</button>
            </div>
        </form>
    </div>

@endsection