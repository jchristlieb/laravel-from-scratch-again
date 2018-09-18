@extends('layouts.master')

@section('main')

    <div class="row">
        <div class="col-md-6">


            <form method="post" action="/register">

                {{csrf_field()}}


                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="" id="">
                </div>


                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="" name="" id="">
                </div>

            </form>

        </div>
    </div>


@endsection


