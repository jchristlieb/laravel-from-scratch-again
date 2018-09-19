@extends('layouts.master')

@component('intro')
    @slot('title')
        {{ $post->title }}
        @endslot
    @endcomponent

@section('main')

    <p>{{ $post->body }}</p>

    @endsection
