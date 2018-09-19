@extends('layouts.master')

@component('intro')
    @slot('title')
        Read and write
    @endslot
    Communicate your thoughts and comment on others.
@endcomponent

@section('main')

    <div class="row">
        @foreach($posts as $post)

            <div class="col-md-6">
                <div class="card mb-4">
                    <a href="posts/{{ $post->id }}">
                        <div class="card-header small">
                            Category
                        </div>
                        <div class="card-body">
                            <h5>{{ $post->title }}</h5>
                            <p>{{ str_limit($post->body, 30, '...') }}</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted small">Written {{ $post->created_at->diffForHumans() }}
                                by </p>
                        </div>
                    </a>
                </div>
            </div>

        @endforeach

        <div class="col-12">
            {{ $posts->links() }}
        </div>


    </div>


@endsection
