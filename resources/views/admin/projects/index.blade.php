@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-secondary">
        <div class="container">
            <h1>
                Projects
            </h1>
        </div>
    </header>

    <div class="container mt-5">

        <div class="table-responsive-md">
            <table class="table table-striped table-hover table-borderless table-secondary align-middle">
                <thead class="table-dark">
                    <caption>
                        Projects
                    </caption>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Tools</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($projects as $project)
                        <tr class="table-dark">
                            <td scope="row">{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <!--<td>
                                            @*if (Str::startsWith($project->cover_image, 'https://'))
                                                <img loading="lazy" src="{*{ $project->cover_image }}" alt="">
                                            @*else
                                                <img loading="lazy" src="{*{ assets('storage/' . $project->cover_image) }}" alt="">
                                            @*endif
                                            </td> -->
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->tools }}</td>
                            <!-- <td> <a href="{*{ $project->project_url }}" target="_blank">Preview</a> </td>-->
                            <!-- il (target="_blank") serve per aprire in link un altra scheda altrimenta apre nella stessa pagina -->
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.show', $project) }}">
                                    <i class="fa fa-eye fa-sm fa-fw" aria-hidden="true"></i> VIEW
                                </a>

                                <a class="btn btn-secondary btn-sm" href="{{ route('admin.projects.edit', $project) }}">
                                    <i class="fa fa-pencil fa-sm fa-fw" aria-hidden="true"></i> EDIT
                                </a>

                                <a class="btn btn-danger btn-sm" href="">
                                    <i class="fa fa-trash fa-sm fa-fw" aria-hidden="true"></i> DELETE
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="table-dark">
                            <td scope="row" colspan="5">No project, start workin on something</td>
                        </tr>
                    @endforelse


                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>

    </div>
@endsection
