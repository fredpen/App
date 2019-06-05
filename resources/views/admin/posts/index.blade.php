@extends('layouts.admin');

@section('title')
    Posts
@endsection
@section('content')

    <div class="col-xl-12">
        <h4 class="header-title">Posts</h4>
        <div class="table-responsive-md">
            <table class="table table-striped table-centered mb-0">
                <thead>
                    <tr>
                        <th>Id</th>
                         <th>Photo</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Author</th>
                        <th>category</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                            <tr>
                                <th>{{ $post->id}}</th>
                                <th><img height="40px" src="{{ $post->photo ? $post->photo->file : "/images/basic.jpg"}}" alt="{{ $post->title }}"> </th>
                                <th>{{ $post->title}}</th>
                                <th>{{ $post->body}}</th>
                                <th>{{ $post->user->name}}</th>
                                <th>{{ $post->category_id}}</th>
                                <th>{{ $post->created_at->diffForHumans()}}</th>
                                <th>{{ $post->updated_at->diffForHumans()}}</th>
                                <td class="table-action">
                                    <a href=" {{ route('post.edit', $post->id) }} " class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                </td>
                                <td class="table-action">
                                    {!! Form::open(['method'=> 'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}
                                        {!! Form::submit('Del', ['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div> <!-- end table-responsive-->
    </div><!-- end col-->

@endsection
