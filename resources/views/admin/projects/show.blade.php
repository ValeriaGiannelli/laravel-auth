@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1>{{$project->id}}# {{$project->title}}</h1>
    <img src="{{$project->img}}" alt="immagine di {{$project->title}}">
    <p>Descrizione: {{$project->description}}</p>
    <h3>Data di inizio: {{$project->start_date}}</h3>

</div>
@endsection
