@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-3">
        {{$project->title}}
    </h1>
    <div class="mt-5 text-center">
        SLUG: {{$project->slug}}
    </div>
    <p class="text-center">DESCRIPTION: {{$project->description}}</p>
    <div class="text-center">
        TYPE: {{$project->type->type}}
    </div>
    <div class="d-flex align-items-center justify-content-center gap-4 mt-3">
        <a href="{{route('admin.projects.edit', $project)}}">Modifica</a>
        <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
           @csrf
           @method('DELETE')
           <button class="btn text-danger">Elimina</button>
        </form>
    </div>
</div>
@endsection