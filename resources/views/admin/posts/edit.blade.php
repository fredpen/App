@extends('layouts.admin');

@section('title')
    Edit Post
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="col-sm-6 justify-self-center alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>Note - </strong>{{ session('status')}}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-center">Edit Post</h4>
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <img width="100%" class="img-responsive img-rounded" src="{{ $post->photo ? $post->photo->file : '/images/basic.jpg' }} " alt="">
                        </div>
                        <div class="col-md-6">
                            {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
                                @include('../../includes/_post_form', [$text = "Update Post"])
                            {!! Form::close() !!}
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>

@endsection
