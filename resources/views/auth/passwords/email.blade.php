@extends('layouts.home')

@section('title', 'Reset Password')

@section('content')

    <h3 class="text-center">Reset Password</h3>

    <div class="col-sm-6 col-sm-offset-3">

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif

        <form method="POST" action="{{route('password.email')}}">
            @csrf

            <div class="form-group">
                <label for="email">Email address:
                    <span class="errors">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                </label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control" id="email">
            </div>

            <div class="form-group col-sm-6 col-sm-offset-3">
                <button type="submit" class="col-sm-12 btn btn-primary">Send Password Reset Link</button>
            </div>
        </form>
    </div>

@endsection