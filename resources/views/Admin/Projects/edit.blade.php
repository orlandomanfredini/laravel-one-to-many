@extends('layouts.app')

@section('content')
<form action="{{ route('admin.projects.update', $project) }}" method="POST">

    {{-- Cross Site Request Forgering --}}
    @csrf
    @method('PUT')

    <div class="mb-3 mt-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="inserisci il title"
            value="{{old('title', $project->title)}}">
    </div>



    <div class="mb-3 ">
        <label for="attack" class="form-label">Description</label>
        <input type="text" min="0" max="999" step="1" name="description" class="form-control" id="description"
          value="{{old('description', $project->description)}}"  placeholder="inserisci descrizione">
    </div>


    <div class="mb-3">
        <select name="type_id" id="type_id">
            <option value="">Seleziona Tipo Di Progetto</option>
            @foreach ( $types as $type )
             <option @selected($type->id == old('type_id', $project->type_id)) value="{{$type->id}}">{{$type->slug}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Crea</button>
</form>


@endsection