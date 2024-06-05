@extends('layouts.app')

@section('content')
<div class="container">
    <form class="mt-5" action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci titolo">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" placeholder="Inserisci descrizione">
        </div>

       <button>SALVA</button>
    </form>
</div>
@endsection