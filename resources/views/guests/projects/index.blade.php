@extends('layouts.app')
@section('content')
    <div class="p-5 mb-4 bg-dark text-white rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">My Projects</h1>
            <p class="col-md-8 fs-4">
                Using a series of utilities, you can create this jumbotron, just
                like the one in previous versions of Bootstrap. Check out the
                examples below for how you can remix and restyle it to your liking.
            </p>
            <a href="#projects" class="btn btn-outline-light rounded-md">
                <i class="fas fa-chevron-down fa-lg fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <div class="content" id="projects">
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
