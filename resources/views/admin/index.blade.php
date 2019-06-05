@extends('layouts.admin');


@section('title')
    All users
@endsection

@section('num_users')
    {{ count($users) }}
@endsection

@section('content')
    <div class="row">
        @if (Session::has('update'))
            <div class="col-sm-12 danger"> {{ session('update') }} </div>
        @endif
         @if (Session::has('delete'))
            <div class="col-sm-12 danger"> {{ session('delete') }} </div>
        @endif

        <div class="col-xl-12">
            <h4 class="header-title">All Users</h4>
            <div class="table-responsive-md">
                <table class="table table-striped table-centered mb-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id}}</th>
                                <th><img height="30px" src="{{ $user->photo ? $user->photo->file : "/images/basic.jpg"}}" alt="foto"> </th>
                                <th>{{ $user->name}}</th>
                                <th>{{ $user->email}}</th>
                                <th>{{ $user->role->name}}</th>
                                <th>{{ ($user->is_active ? "Active" : "Not active")}}</th>
                                <th>{{ $user->created_at->diffForHumans()}}</th>
                                <th>{{ $user->updated_at->diffForHumans()}}</th>
                                <td class="table-action">
                                    <a href=" {{ route('users.edit', $user->id) }} " class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                </td>
                                <td class="table-action">
                                    {!! Form::open(['method'=> 'DELETE', 'action'=> ['UsersController@destroy', $user->id]]) !!}
                                        {!! Form::submit('Del', ['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end table-responsive-->
        </div><!-- end col-->
    </div>
@endsection
