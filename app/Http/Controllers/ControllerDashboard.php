<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ControllerDashboard extends Controller
{
    public function sek_lppmp()
    {
        return view('users.admin.dashboard');
    }
    public function p2m2()
    {
        return view('users.p2m2.dashboard');
    }
    public function pbbtuweb()
    {          
        return view('users.pbb.dashboard');
        
    }
    public function pbbsipas()
    {
        return view('users.pbb.dashboardsipas');

    }
    public function sipaspps()
    {
        return view('users.pbb.dashboardpps');
    }


    public function puslaba()
    {
        return view('users.puslaba.dashboard');
    }
    public function pusjian()
    {
        return view('users.pusjian.dashboard');
    }
}
