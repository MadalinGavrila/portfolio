@extends('layouts.home')

@section('title', 'Contact')

@section('content')

    <h3 class="text-center">Contact Me</h3>

    <div class="portfolio-contact col-sm-6 col-sm-offset-3">

        @if(session('contact_mail'))
            <div class="alert alert-success text-center">
                {{session('contact_mail')}}
            </div>
        @endif

        <form method="POST" action="{{route('home.sendmail')}}">
            @csrf

            <div class="form-group">
                <label for="name">Name:
                    <span class="errors">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                </label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="email">Email:
                    <span class="errors">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                </label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control" id="email">
            </div>

            <div class="form-group">
                <label for="message">Message:
                    <span class="errors">{{$errors->has('message') ? $errors->first('message') : ''}}</span>
                </label>
                <textarea name="message" class="form-control" rows="3" id="message">{{old('message')}}</textarea>
            </div>

            <div class="form-group col-sm-6 col-sm-offset-3">
                <button type="submit" class="col-sm-12 btn btn-primary"><i class="fas fa-paper-plane"></i>Send Message</button>
            </div>
        </form>
    </div>

@endsection