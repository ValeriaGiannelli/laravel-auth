@extends('layouts.app')

@section('content')
<div class="container my-5">

    @if(session('edit'))
        <div class="alert alert-success">
            {{session('edit')}}
        </div>
    @endif

    <a class="btn btn-warning" href="{{route('admin.projects.edit', $project)}}">
        <i class="fa-solid fa-pencil"></i>
    </a>
    @include('admin.partials.formDelete')

    <h1>{{$project->id}}# {{$project->title}}</h1>
    <img src="{{$project->img}}" alt="immagine di {{$project->title}}">
    <p>Descrizione: {{$project->description}}</p>
    <h3>Data di inizio: {{$project->start_date}}</h3>



</div>
@endsection
