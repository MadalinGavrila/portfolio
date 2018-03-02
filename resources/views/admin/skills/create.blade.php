@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    <h1 class="page-header">Create Skills</h1>

    <div class="col-sm-6 col-sm-offset-3">
        <div class="row">
            @include('includes.form_error')
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            {!! Form::open(['method'=>'POST', 'action'=>'AdminSkillsController@store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('progress', 'Progress:') !!}
                {!! Form::text('progress', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6 col-sm-offset-3">
                {!! Form::submit('Create Skill', ['class'=>'col-sm-12 btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection