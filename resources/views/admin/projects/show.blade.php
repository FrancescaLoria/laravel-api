@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="title text-center">{{$project->title}}</h1>
        <div class="d-flex justify-content-between">
            @if ($project->type)
                <span>TIPOLOGIA: {{ $project->type->name }}</span>
            @else
                <span>NESSUNA TIPOLOGIA</span>
            @endif
            <span>{{ $project->slug }}</span>
        </div>
        
        <p class="mt-3">{{$project->content}}</p>
        <div>
            <h4>Technologies: </h4>
            @forelse ($project->technologies as $technology)
                <span>{{ $technology->name }} {{ $loop->last ? '' : ','}}</span>
            @empty
                <span>Nessun tecnologia presente</span>
            @endforelse
        </div>
    </div>
   
    
@endsection