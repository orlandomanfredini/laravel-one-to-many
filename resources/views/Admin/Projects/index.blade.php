@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $item  )
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><a href="{{route('admin.projects.show', $item)}}">{{$item->title}}</a></td>
      <td>{{$item->description}}</td>
      <td></td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection