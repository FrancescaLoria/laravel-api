@extends('layouts.admin')

@section('content')
    <h1 class="text-center my-3">CREA UN NUOVO PROJECT</h1>
    @if ( $errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <strong>{{ $error }}</strong>
        @endforeach
    </div>
        
    @endif
    <form action="{{ route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">TITOLO</label>
            <input type="text" class="form-control" id="title" placeholder="scrivi il titolo" name="title" value="{{old('title')}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">CONTENUTO</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ old('content')}}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">INVIA</button>
        <a href="{{route('admin.projects.index')}}" class="btn btn-warning ms-2">INDIETRO</a>
    </form>
@endsection