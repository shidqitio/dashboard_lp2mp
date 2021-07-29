<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Alert;
use App\User;
use App\UserRole;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
 
            $user = DB::SELECT("select users.id, users.name, users.email, roles.id, roles.role_name from users join role_user on users.id = role_user.user_id 
            join roles on role_user.role_id = roles.id");
            return view('users/admin/user', compact('user'));
            

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
            return view('users/admin/createuser');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        if($request->role_id == 1 ){
            $users->role = "ADMIN";
        }
        elseif($request->role_id == 2){
            $users->role = "PUSJIAN";
        }
        elseif($request->role_id == 3){
            $users->role = "PUSLABA";
        }
        elseif($request->role_id == 4){
            $users->role = "PBB";
        }
        elseif($request->role_id == 5){
            $users->role = "P2M2";
        }
        $users->password = Hash::make($request->password);
        $users->save();
        if ($users->id != NULL) {
			$role = new UserRole;
			$role->user_id = $users->id;
			$role->role_id = $request->role_id;
			$role->save();
		}


        
        Alert::success('Berhasil', 'Data Berhasil di Input');
        return redirect('/user');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
