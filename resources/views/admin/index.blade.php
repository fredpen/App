@extends('layouts.admin');


@section('title')
    All users
@endsection

@section('num_users')
    {{ count($users) }}
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <h4 class="header-title">All Users</h4>
            <div class="table-responsive-md">
                <table class="table table-striped table-centered mb-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id}}</th>
                                <th>{{ $user->name}}</th>
                                <th>{{ $user->email}}</th>
                                <th>{{ $user->role->name}}</th>
                                <th>{{ ($user->is_active ? "Active" : "Not active")}}</th>
                                <th>{{ $user->created_at->diffForHumans()}}</th>
                                <th>{{ $user->updated_at->diffForHumans()}}</th>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end table-responsive-->
        </div><!-- end col-->
    </div>
@endsection
