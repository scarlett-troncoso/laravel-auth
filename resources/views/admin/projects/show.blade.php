@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-secondary">
        <div class="container">
            <h1>
                {{ $project->title }}
            </h1>
            <a href="{{ route('admin.projects.index') }}"> <i class="fa fa-arrow-left fa-sm fa-fw" aria-hidden="true"></i>
                Back</a>
        </div>
    </header>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <p class="col">{{ $project->description }}</p>
            <div class="col">{{ $project->tools }}</div>
        </div>
    </div>
@endsection
