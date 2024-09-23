@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo di progetto</th>
                <th scope="col">Inizio</th>
                <th scope="col">Fine</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $projects as $project )
                    <tr>
                            <td class="col-auto"> {{$project->id}}</td>
                            <td class="col-auto"> {{$project->title}} </td>
                            <td class="col-auto"> {{$project->project_type}} </td>
                            <td class="col-auto">{{($project->start_date)->format('d-m-Y')}}</td>
                            <td class="col-auto">{{($project->end_date)->format('d-m-Y')}}</td>
                            <td class="col-auto">{{$project->description}}</td>

                            <td class="col-auto">
                                <a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-warning" href="{{route('admin.projects.edit', $project)}}">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>

                            </td>
                    </tr>
                @endforeach

            </tbody>
          </table>
    </div>

</div>
@endsection
