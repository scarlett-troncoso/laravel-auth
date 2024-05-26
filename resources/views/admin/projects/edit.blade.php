@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-secondary">
        <div class="container">
            <h1>
                Edit Project: {{ $project->title }}
            </h1>
        </div>
    </header>

    <div class="container mt-5">

        @include('partials.errors')

        <form action="{{ route('admin.projects.update', $project) }}" method="post">
            <!--se avessemo la cover_image: enctype="multipart/form-data"-->
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="My project title" value="{{ old('title', $project->title) }}" />
                <small id="titleHelper" class="form-text text-muted">Type a title for your project</small>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tools" class="form-label">Tools</label>
                <input type="text" class="form-control" name="tools" id="tools" aria-describedby="toolsHelper"
                    placeholder="Tools used in my project" value="{{ old('tools', $project->tools) }}" />
                <small id="toolsHelper" class="form-text text-muted">Type a tools used for your project</small>
                @error('tools')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Update
            </button>


        </form>
    </div>
@endsection
