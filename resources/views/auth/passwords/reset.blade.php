@extends('layouts.other')

@section('title', 'Reset Password')

@section('content')

    <h3 class="text-center">Reset Password</h3>

    <div class="col-sm-6 col-sm-offset-3">
        <form method="POST" action="{{route('password.request')}}">
            @csrf

            <input type="hidden" name="token" value="{{$token}}">

            <div class="form-group">
                <label for="email">Email address:
                    <span class="errors">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                </label>
                <input type="text" name="email" value="{{$email or old('email')}}" class="form-control" id="email">
            </div>

            <div class="form-group">
                <label for="password">Password:
                    <span class="errors">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                </label>
                <input type="password" name="password" class="form-control" id="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:
                    <span class="errors">{{$errors->has('password_confirmation') ? $errors->first('password_confirmation') : ''}}</span>
                </label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
            </div>
        </form>
    </div>

@endsection