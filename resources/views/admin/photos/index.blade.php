@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    @if(count($photos))

        <h1 class="page-header">Photos</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach($photos as $photo)
                    <tr>
                        <td>{{$photo->id}}</td>
                        <td><img height="50" src="{{$photo->file ? $photo->file : 'http://placehold.it/400x400'}}" alt="IMAGE" /></td>
                        <td>
                            @if($photo->user)
                                User / {{$photo->user->username}}
                            @elseif($photo->project)
                                Project / {{$photo->project->name}}
                            @else
                                No Owner
                            @endif
                        </td>
                        <td>{{$photo->created_at->diffForHumans()}}</td>
                        <td>{{$photo->updated_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPhotosController@destroy', $photo->id]]) !!}

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

        <h1 class="text-center">No Photos</h1>

    @endif

@endsection