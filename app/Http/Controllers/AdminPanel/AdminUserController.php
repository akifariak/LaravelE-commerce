<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Roleuser;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data= User::all();
        return  view('admin.user.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data=User::find($id);
        $roles= Role::all();
        return view('admin.user.show', [
            'data'=>$data,
            'roles'=>$roles
        ]);
    }


    public function addrole(Request $request, string $id)
    {
        //
        $data= New Roleuser();
        $data->user_id= $id;
        $data->role_id = $request->role_id;
        $data->save();
        return redirect(route('admin.user.show',['id'=>$id]));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * @param  int $id
     * Remove the specified resource from storage.
     */
    public function destroyrole($uid ,$rid)
    {
        //
        $user= User::find($uid);
        $user->roles()->detach($rid);
        return redirect(route('admin.user.show', ['id'=>$uid]));

    }
}
