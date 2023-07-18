@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4 d-flex">
        <div class="row">
            <div class="col-12">
                <div class="card projCard mb-4">
                    <div class="card-header">
                        <h3>{{ $project->title }}</h3>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between p-3">
                        <img class="projImg"
                            src="{{ $project->image ? asset('storage/' . $project->image) : asset('public/storage/placeholders/placeholder.png') }}"
                            alt="">
                        <p>{{ $project->description }}</p>
                        <div>
                            <span><strong>Tecnologie:</strong></span>
                            @foreach ($project->technologies as $technology)
                                <span class="badge bg-primary">{{ $technology->name }}</span>
                            @endforeach
                        </div>
                        <div class="btnContainer mt-3">
                            <button class="btn btn-primary text-white me-3"><a class="text-white" href="{{ route('admin.projects.edit', $project->id) }}">Modifica</a></button>
                            <div class="btn btn-danger">Cancella</div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

<style scoped>
    .projCard {
        width: 68vw;
        height: 400px;

    }

    .projImg {
        height: 350px;
        object-fit: cover;
        object-position: top;
        margin-bottom: 1em;
    }

    .btnContainer a{
        text-decoration: none
    }
</style>
