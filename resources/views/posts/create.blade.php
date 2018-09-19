@extends('layouts.master')

@component('intro')
    @slot('title')
        Create a new post
        @endslot
    Write a catchy title and valuable content.
    @endcomponent

@section('main')

    <div class="row">
        <div class="col-12">

            @include('layouts.errors')

            <form method="post" action="/post">

                {{csrf_field()}}


                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" id="">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea rows="10" class="form-control" name="body" id=""></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create post</button>
                </div>

            </form>

        </div>
    </div>


    @endsection
