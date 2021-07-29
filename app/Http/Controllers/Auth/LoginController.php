<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Hash;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated()
    {
        if (auth()->user()->hasRole('admin')) {
            return redirect('/admin');
        }
        if (auth()->user()->hasRole('puslaba')) {
            return redirect('/puslaba');
        }
        if (auth()->user()->hasRole('pusjian')) {
            return redirect('/pusjian');
        }
        if (auth()->user()->hasRole('pbb')) {
            return redirect('/pbb');
        }
        if (auth()->user()->hasRole('p2m2')) {
            return redirect('/p2m2');
        }

        // if (auth()->user()->hasRole('pemantau')) {
        //     return redirect('/pemantau');
        // }

        // if (auth()->user()->hasRole('upbjj')) {
        //     return redirect('/upbjj');
        // }

        // if (auth()->user()->hasRole('pjtu')) {
        //     return redirect('/pjtu');
        // }

        return redirect('/login');
    }

    // public function login(Request $request){

    //     $email = $request->email;
    //     $password = $request->password;

    //     $data = User::where('email',$email)->first();
    //     if($data){ //apakah email tersebut ada atau tidak
    //         if(Hash::check($password,$data->password)){
    //             Session::put('name',$data->name);
    //             Session::put('email',$data->email);
    //             Session::put('admin',$data->admin);

    //           //  return redirect(route('user'));
    //             if(Session::get('admin') == 0 ){

    //                 return redirect(route('user')); 
    //             }
    //             elseif (Session::get('admin') == 1 )
    //             {
    //                 return redirect(route('admins'));
    //             }
    //         }
    //         else{
    //             return redirect('/home')->with('alert','Password atau Email, Salah !');

    //             }
    //         }

    //     }

}
