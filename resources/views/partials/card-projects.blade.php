<div class="card h-100">
    <a href="{{ route('projects.show', $project) }}">
        @if (Str::startsWith($project->cover_image, 'https://'))
            <img loading="lazy" class="card-img-top" src="{{ $project->cover_image }}" alt="">
        @else
            <img loading="lazy" class="card-img-top" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
        @endif
    </a>
    <div class="card-body">
        <h2>{{ $project->title }}</h2>
        <a class="btn btn-primary" href="{{ route('projects.show', $project) }}">View</a>
    </div>
</div>
