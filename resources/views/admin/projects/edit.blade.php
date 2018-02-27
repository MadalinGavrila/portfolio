@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    <h1 class="page-header">Edit Project</h1>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            {!! Form::model($project, ['method'=>'PATCH', 'action'=>['AdminProjectsController@update', $project->id]]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('url', 'Link:') !!}
                {!! Form::text('url', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6 col-sm-offset-3">
                {!! Form::submit('Update Project', ['class'=>'col-sm-12 btn btn-primary']) !!}
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