@extends('layouts.app')

@section('content')
<form action="{{ route('admin.projects.store') }}" method="POST">

    {{-- Cross Site Request Forgering --}}
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="inserisci il title"
            value="{{old('title')}}">
    </div>



    <div class="mb-3">
        <label for="attack" class="form-label">Description</label>
        <input type="text" min="0" max="999" step="1" name="description" class="form-control" id="description"
            placeholder="inserisci descrizione">
    </div>


    <div class="mb-3">
        <select name="type_id" id="type_id">
            <option value="">Seleziona Tipo Di Progetto</option>
            @foreach ( $types as $type )
             <option value="{{$type->id}}">{{$type->slug}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Crea</button>
</form>

@endsection