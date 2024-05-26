@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <div class="row">
                <div class="col-auto">
                    <div class="img-profile">
                        <img width="200" class="img-fluid rounded-circle" src="/img/" alt="">
                    </div>
                </div>
                <div class="col">
                    <h1 class="display-5 fw-bold">
                        Scarlett
                    </h1>

                    <p class="col-md-8 fs-4">
                        This a preset with projects including
                    </p>
                    <a href="{{ route('guests.projects.index') }}" class="btn btn-primary btn-lg" type="button">Check out
                        my projects</a>
                </div>
            </div>


        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi
                deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis
                accusamus dolores!
            </p>

            <div class="row">
                @forelse ($projects as $project)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-top">{{ $project->title }}</h2>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="{{ route('guests.projects.show', $project) }}">View</a>
                            </div>
                        </div>


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
