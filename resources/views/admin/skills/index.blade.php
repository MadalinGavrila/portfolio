@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    @if(count($skills))

        <h1 class="page-header">Skills</h1>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>User</th>
                    <th>Name</th>
                    <th>Progress</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($skills as $skill)
                    <tr>
                        <td>{{$skill->id}}</td>
                        <td>{{$skill->user ? $skill->user->username : 'No User'}}</td>
                        <td><a href="{{route('admin.skills.edit', $skill->id)}}">{{$skill->name}}</a></td>
                        <td>{{$skill->progress}}</td>
                        <td>{{$skill->created_at->diffForHumans()}}</td>
                        <td>{{$skill->updated_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminSkillsController@destroy', $skill->id]]) !!}

                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) !!}
                                </div>

                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
                {{$skills->links()}}
            </div>
        </div>

    @else

        <h1 class="text-center">No Skills</h1>

    @endif

@endsection