@extends('layouts.master')

@component('intro')
    @slot('title')
        {{ $post->title }}
        @endslot
    Written {{ $post->created_at->DiffForHumans() }} by {{ $post->user->name }}
    @endcomponent

@section('main')

    <p>{{ $post->body }}</p>

    @endsection
