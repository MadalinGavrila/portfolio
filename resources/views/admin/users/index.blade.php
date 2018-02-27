@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    @if(count($users))

        <h1 class="page-header">Users</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Role</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->username}}</a></td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address ? $user->address : 'No Address'}}</td>
                    <td>{{$user->phone ? $user->phone : 'No Phone'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}

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

        <h1 class="text-center">No Users</h1>

    @endif

@endsection