@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
            
        @endif
        <h1 class="text-center my-3">LA LISTA DEI PROJECTS</h1>
        <div class="text-end">
            <a class="btn btn-primary" href="{{route('admin.projects.create')}}">NUOVO PROJECT</a>
        </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-success">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    
    </div>
@endsection