@extends('layouts.master')

@component('intro')
    @slot('title')
        Register
        @endslot

    Please register to use the app.
    @endcomponent

@section('main')

    <div class="row">
        <div class="col-md-6">

            @include('layouts.errors')

            <form method="post" action="/register">

                {{csrf_field()}}


                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" id="">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" id="">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="">
                </div>

                <div class="form-group">
                    <label>Confirm password</label>
                    <input class="form-control" type="password" name="password_confirmation" id="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

            </form>

        </div>
    </div>


@endsection


