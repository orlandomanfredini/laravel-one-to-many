@extends('layouts.app')

@section('content')
<section class="p-5 mt-2">
    <h3 class="text-center m2-5">Orlando's GitHub Random</h3>
    <p class="text-center mb-5 container-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eos, animi minus error deleniti maxime quibusdam est, corrupti, voluptatibus nam odio nemo fuga fugit blanditiis! Sit voluptas tempora quod quasi.</p>
    
<div class="container">
    <div class="row g-2">
        <div class="col-6">
            <div class="card bg-warning d-flex align-items-center justify-content-center p-5">
                <h2>PROJECTS</h2>
                <a href="{{route('admin.projects.index')}}">Vedi</a>
            </div>
        </div>
        <div class="col-6">
            <div class="card bg-danger d-flex align-items-center justify-content-center p-5">
                <h2>ADD RECORD</h2>
                <a href="{{route('admin.projects.create')}}">Aggiungi</a>
            </div>
        </div>
    </div>
</div> 
</section>
@endsection