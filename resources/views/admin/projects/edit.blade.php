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

        <form action="{{ route('admin.projects.update', $project) }}" method="post" enctype="multipart/form-data">
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
                <label for="type_id" class="form-label">Type</label>
                <select class="form-select form-select-lg" name="type_id" id="type_id">
                    <option selected disabled>Select one</option>

                    @foreach ($types as $type)
                        <option value="{{ $type->id }}"
                            {{ $type->id == old('type_id', $project->type?->id) ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex gap-3">
                <img width="140" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Change cover image </label>
                    <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder="cover image"
                        aria-describedby="coverImageHelper" />
                    <div id="coverImageHelper" class="form-text">Change cover image for this post</div>
                </div>
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

            <div class="mb-3">
                <label for="project_url" class="form-label">Project URL</label>
                <input type="text" class="form-control" name="project_url" id="project_url" aria-describedby="urlHelper"
                    placeholder="https://link_here" value="{{ old('project_url', $project->project_url) }}" />
                <small id="urlHelper" class="form-text text-muted">Type a url for your project</small>
                @error('project_url')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="source_code_url" class="form-label">Source Code Url</label>
                <input type="text" class="form-control" name="source_code_url" id="source_code_url"
                    aria-describedby="sourceCodeHelper" placeholder="https://link_here"
                    value="{{ old('source_code_url', $project->source_code_url) }}" />
                <small id="sourceCodeHelper" class="form-text text-muted">Type a Source Code Url for your project</small>
                @error('project_url')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Update
            </button>


        </form>
    </div>
@endsection
