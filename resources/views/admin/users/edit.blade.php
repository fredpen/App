@extends('layouts.admin');


@section('title')
    Update user
@endsection

@section('num_users')
    1
@endsection

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-center">Update user</h4>
                    <div class="row">
                        <div class="col-3">
                            <img width="100%" class="img-responsive img-rounded" src="{{ $user->photo ? $user->photo->file : '/images/basic.jpg' }} " alt="">
                        </div>
                        <div class="col-sm-6">
                            {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['UsersController@update', $user->id], 'files'=>true]) !!}
                                @include('../../includes/_form_error', [$text = "Update User"])
                            {!! Form::close() !!}
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
@endsection
