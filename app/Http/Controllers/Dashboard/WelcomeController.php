<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:dashboard_read'])->only('index');
    }//end of constructor

    public function index()
    {
    	return view('dashboard.welcome');
    }//end of index

}//end of controller dashboard
