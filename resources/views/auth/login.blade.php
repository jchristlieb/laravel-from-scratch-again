@extends('layouts.master')

@component('intro')
    @slot('title')
        Login
    @endslot
    Submit your email and password.
@endcomponent

@section('main')

    <div class="row">
        <div class="col-md-6">

            @include('layouts.errors')

            <form method="post" action="/login">

                {{csrf_field()}}

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" id="">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

        </div>
    </div>

@endsection
