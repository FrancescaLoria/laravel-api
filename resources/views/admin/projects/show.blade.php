@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="title text-center">{{$project->title}}</h1>
        <div class="text-end">{{$project->slug}}</div>
        <p class="mt-3">{{$project->content}}</p>
    </div>
    
@endsection