@extends('layouts.app')

@section('page-title', $type->title)

@section('main-content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class=" text-success">
                        {{ $type->title }}
                    </h1>

                    <h6>
                        Created at {{ $type->created_at->format('d/m/Y - H:i')}}
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <ul>
                        <li>
                            ID: {{ $type->id }}
                        </li>

                        <li>
                            Slug: {{ $type->slug }}
                        </li>
                    </ul>

                    <a class="btn btn-outline-warning btn-sm" href="{{ route('admin.types.edit', ['type' => $type->id]) }}">
                        ໒(⊙ᴗ⊙)७✎
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection