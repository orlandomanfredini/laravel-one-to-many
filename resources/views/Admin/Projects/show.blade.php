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
</div>
@endsection