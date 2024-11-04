@extends('layouts.app')

@section('page-title', $project->title)

@section('main-content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class=" text-success">
                        {{ $project->title }}
                    </h1>

                    <h6>
                    
                        Created at {{ $project->created_at->format('d/m/Y - H:i')}}
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <img src="{{ $project->card }}" class="card-img-top" alt="{{ $project->title }}">

                <div class="card-body">
                    <ul>
                        <li>
                            ID: {{ $project->id }}
                        </li>
                        <li>
                            Slug: {{ $project->slug }}
                        </li>
                        <li>
                        </li>
                        <li>
                            Client: {{ $project->client }}
                        </li>
                        <li>
                            Sector: {{ $project->sector }}
                        </li>
                        <li>
                            Published: {{ $project->published ? 'Yes' : 'No' }}
                        </li>
                    </ul>

                    <p class="mb-0">
                        Description: {{ $project->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection