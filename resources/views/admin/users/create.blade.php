@extends('layouts.admin');


@section('title')
    Create user
@endsection

@section('num_users')
    1
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-center">Create new user</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            {!! Form::open(['method'=>'POST', 'action'=>'UsersController@store', 'files'=>true]) !!}
                                @include('../../includes/_form_error', [$text = "Create User"])
                            {!! Form::close() !!}
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
@endsection
