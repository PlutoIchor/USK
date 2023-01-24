<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUser()
    {
        $users = User::where('role', '=', 'user')->get();
        return response()->json([
            'Users' => $users
        ]);
    }

    public function getAdmin()
    {
        $admin = User::where('role', '=', 'admin')->get();
        return response()->json([
            'Admin' => $admin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addUser(Request $request)
    {
        User::create([
            'kode_user' => '',
            'nis'=> $request->nis,
            'fullname' => $request->fullname, 
            'username' => $request->username, 
            'password' => Hash::make($request->password),
            'kelas' => $request->kelas, 
            'alamat' => $request->alamat, 
            'verif' => 'verified', 
            'role' => 'user', 
            'join_date' => now(),
        ]);
    }

    public function addAdmin(Request $request)
    {
        User::create([
            'kode_user' => '',
            'fullname' => $request->fullname, 
            'username' => $request->username, 
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat, 
            'verif' => 'verified', 
            'role' => 'admin', 
            'join_date' => now(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id','=',$id)->get();
        $user::create([
            'kode_user' => '',
            'nis'=> $request->nis,
            'fullname' => $request->fullname, 
            'username' => $request->username, 
            'password' => Hash::make($request->password),
            'kelas' => $request->kelas, 
            'alamat' => $request->alamat, 
            'verif' => 'verified', 
            'role' => 'user', 
            'join_date' => now(),
        ]);
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
        $user->delete();
    }
}
