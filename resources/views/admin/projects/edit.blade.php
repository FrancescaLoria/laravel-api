@extends('layouts.admin')

@section('content')
    <h1 class="text-center my-3">MODIFICA UN PROJECT: {{$project->title}}</h1>
    @if ( $errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <strong>{{ $error }}</strong>
        @endforeach
    </div>
        
    @endif
    <form action="{{ route('admin.projects.update', $project->slug)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">TITOLO</label>
            <input type="text" class="form-control" id="title" placeholder="scrivi il titolo" name="title" value="{{old('title', $project->title)}}">
        </div>

        <div class="mb-3">
            <label for="type">Tipologia</label>
            <select class="form-select" id="type" name="type_id">
                <option value=""></option>
                @foreach ($types as $type)
                    <option @selected($type->id == old('type_id',$project->type?->id)) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <h5>Tecnologie</h5>
            @foreach ($technologies as $technology)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                        id="technology-{{ $technology->id }}" 
                        @checked(old('technologies') ? in_array($technology->id, old('technologies', [])) : $project->technologies->contains($technology))>
                    <label class="form-check-label" for="technology-{{ $technology->id }}">
                        {{ $technology->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">CONTENUTO</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ old('content', $project->content)}}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">INVIA</button>
        <a href="{{route('admin.projects.index')}}" class="btn btn-warning ms-2">INDIETRO</a>
    </form>
@endsection