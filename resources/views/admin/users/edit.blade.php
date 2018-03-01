@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    <h1 class="page-header">Edit User</h1>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id]]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('username', 'Username:') !!}
                {!! Form::text('username', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email address:') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6 col-sm-offset-3">
                {!! Form::submit('Update User', ['class'=>'col-sm-12 btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

    <div class="col-sm-6 col-sm-offset-3">
        <div class="row">
            @include('includes.form_error')
        </div>
    </div>

@endsection