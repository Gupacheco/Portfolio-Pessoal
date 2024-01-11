@extends('layouts.main')

@section('title', 'Projetos Portfolio')

@section('content')

    <link rel="stylesheet" href="/css/projetos.css">

    <h1 class="titulo">Meus Projetos</h1>

    <div class="projetos">
        <div class="row">
            {{-- <div class="col-sm">
              One of three columns
            </div>
            <div class="col-sm">
              One of three columns
            </div>
            <div class="col-sm">
              One of three columns
            </div> --}}

            @foreach ($projects as $project)
                {{-- <div class="container"> --}}
                <div class="projeto">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->content }}</p>
                            <a href="{{ $project->link }}"><button class="btn-ver">Ver mais...</button></a>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            @endforeach
        </div>
    </div>

@endsection
