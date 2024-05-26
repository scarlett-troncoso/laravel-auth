@extends('layouts.app')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">{{ $project->title }}</h1>

            <a href="{{ route('guests.projects.index') }}">
                <i class="fa fa-arrow-left fa-sm fa-fw" aria-hidden="true"></i> Back
            </a>
        </div>
    </div>



    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <p class="col">{{ $project->description }}</p>

            <h4 class="col">{{ $project->title }}</h4>
            <div class="col">{{ $project->tools }}</div>

        </div>
    </div>
@endsection
