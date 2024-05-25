@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-secondary">
        <div class="container">
            <h1>
                New Project
            </h1>
        </div>
    </header>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Errors</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif

    <div class="container">
        <form action="{{ route('admin.projects.create') }}" method="post">
            <!--se avessemo la cover_image: enctype="multipart/form-data"-->
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="My project title" />
                <small id="titleHelper" class="form-text text-muted">Type a title for your project</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="descriptio " id="description" rows="3">Type a description for your project</textarea>
            </div>


            <div class="mb-3">
                <label for="tools" class="form-label">Tools</label>
                <input type="text" class="form-control" name="tools" id="tools" aria-describedby="toolsHelper"
                    placeholder="Tools used in my project" />
                <small id="toolsHelper" class="form-text text-muted">Type a tools used for your project</small>
            </div>

        </form>
    </div>
@endsection
