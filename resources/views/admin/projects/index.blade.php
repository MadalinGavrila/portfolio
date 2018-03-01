@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    @if(count($projects))

        <h1 class="page-header">Skills</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Name</th>
                <th>Link</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->user ? $project->user->username : 'No User'}}</td>
                        <td><a href="{{route('admin.projects.edit', $project->id)}}">{{$project->name}}</a></td>
                        <td><a href="{{$project->url}}" target="_blank">View Project</a></td>
                        <td>{{$project->created_at->diffForHumans()}}</td>
                        <td>{{$project->updated_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProjectsController@destroy', $project->id]]) !!}

                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) !!}
                                </div>

                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <h1 class="text-center">No Projects</h1>

    @endif

@endsection