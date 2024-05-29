@extends('layouts.app')
@section('content')
    <div class="jumbotron p-3 mb-3 rounded-3" style="background-color: rgb(204, 194, 243)">
        <div class="container py-5">
            <div class="row">
                <div class="col-auto">
                    <div class="img-profile">
                        <img width="200" class="img-fluid rounded-circle" src="./images.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <h1 class="display-5 fw-bold">
                        Scarlett
                    </h1>

                    <p class="col-md-8 fs-4">
                        This a preset with projects including
                    </p>
                    <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg" type="button">Check out
                        my projects</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-3">
                @forelse ($projects as $project)
                    <div class="col  mb-4">
                        @include('partials.card-projects')
                    </div>

                @empty
                    <div class="col">
                        No projects yet
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
