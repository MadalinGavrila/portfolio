@extends('layouts.home')

@section('title', 'Home')

@section('content')

    @if($user && count($user->projects))

        <h3 class="text-center">My Projects</h3>

        @foreach($projects as $project)

            @if(!($loop->index % 4))
                <div class="row projects">
            @endif

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

            @if(!($loop->iteration % 4))
                </div>
            @endif

            @if($loop->count % 4)
                @if($loop->last)
                    </div>
                @endif
            @endif

        @endforeach

        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
                {{$projects->links()}}
            </div>
        </div>

    @else

        <h3 class="text-center">No Projects</h3>

    @endif

@endsection