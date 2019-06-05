<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUsersRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->toArray();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        if (empty(trim($request->password))) {
            $input = $request->except('password');
        } else {
            $input = $request->all();
        }
        if ($file = $request->file('photo_id')) {
            $image_name = time() . $file->getClientOriginalName();
            $file->move('images', $image_name);
            $photo = Photo::create(['file'=>$image_name]);
            $input['photo_id'] = $photo->id;
        }
        $input['password'] = password_hash($request->password, PASSWORD_DEFAULT);
        User::create($input);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @paramint $id
     * @return   \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->toArray();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @ param  \Illuminate\Http\Request  $request
     * @ param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, $id)
    {
        // this is very important
        if (empty(trim($request->password))) {
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = password_hash($request->password, PASSWORD_DEFAULT);
        }
        $user = User::findOrFail($id);
        if ($file = $request->file('photo_id')) {
            $image_name = time() . $file->getClientOriginalName();
            $file->move('images', $image_name);
            $photo = Photo::create(['file'=> $image_name]);
            $input['photo_id'] = $photo->id;
        }
        $user->update($input);
        Session::flash('update', 'The user account has been updated');
        return redirect("/users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        unlink(public_path() . $user->photo->file);
        User::findOrFail($id)->delete();
        Session::flash('delete', "User has been removed");
        return redirect("/users");
    }
}
