@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-secondary">
        <div class="container d-flex align-items-center justify-content-between">
            <h1>
                {{ $project->title }}
            </h1>
            <a href="{{ route('admin.projects.index') }}"> <i class="fas fa-arrow-left fa-sm fa-fw" aria-hidden="true"></i>
                Back</a>
        </div>
    </header>
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                @if (Str::startsWith($project->cover_image, 'https://'))
                    <img loading="lazy" class="img-fluid" src="{{ $project->cover_image }}" alt="">
                @else
                    <img loading="lazy" class="img-fluid" src="{{ assets('storage/' . $project->cover_image) }}"
                        alt="">
                @endif
            </div>
            <div class="col">
                <h4 class="text-muted">
                    {{ $project->title }}
                </h4>
                <div class="metadata">
                    <strong>Type: </strong> {{ $project->type ? $project->type->name : 'Uncategorized' }}
                    <!--Se questo post ha un type allora vedere il name dell type altrimente vedere uncategorized-->
                </div>
                <p class="col my-4">{{ $project->description }}</p>
                <div class="col">{{ $project->tools }}</div>
                <div class="links">
                    <a class="btn btn-primary" href="{{ $project->project_url }}" role="button">
                        <i class="fas fa-link fa-sm fa-fw" aria-hidden="true"></i>Preview
                    </a>
                    <a class="btn btn-primary" href="{{ $project->source_code_url }}" role="button">
                        <i class="fas fa-link fa-sm fa-fw" aria-hidden="true"></i>Source Code
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
