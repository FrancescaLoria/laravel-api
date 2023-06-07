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
    </div>
    
@endsection