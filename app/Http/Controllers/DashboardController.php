<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $page = 'Dashboard Home';
        // return view('dashboard.home', compact('page'));
        return view('dashboard.home')->with('page',$page);
    }

    public function user(){
        $data = array(
            'page'  => 'Dashboard User',
            'users' => ['Muhammad','Andika','Nugraha']
        );
        return view('dashboard.user')->with($data);
    }
}
