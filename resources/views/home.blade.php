@extends('layouts.home')

@section('title', 'Home')

@section('content')

    @if($user && count($user->projects))

        <h3 class="text-center">My Projects</h3>

        <div class="row projects">
            @foreach($projects as $project)
                <div class="col-sm-3">
                    <p>{{$project->name}}</p>
                    <div class="thumbnail">
                        <a href="{{$project->url}}" target="_blank">
                            <img src="{{$project->photo ? $project->photo->file : $project->photoPlaceholder()}}" class="img-responsive project-photo" alt="Image">
                            <div class="caption">
                                <p>View Project</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
                {{$projects->links()}}
            </div>
        </div>

    @else

        <h3 class="text-center">No Projects</h3>

    @endif

@endsection