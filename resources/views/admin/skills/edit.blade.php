@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    <h1 class="page-header">Edit Skill</h1>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            {!! Form::model($skill, ['method'=>'PATCH', 'action'=>['AdminSkillsController@update', $skill->id]]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('progress', 'Progress:') !!}
                {!! Form::text('progress', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-6 col-sm-offset-3">
                {!! Form::submit('Update Skill', ['class'=>'col-sm-12 btn btn-primary']) !!}
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