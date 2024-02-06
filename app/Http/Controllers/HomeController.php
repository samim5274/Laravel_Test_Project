<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    protected $namespace = 'App\Http\Controllers';

    public function index(){
        return view('welcome');
    }

    public function show(Request $request){
        $userid = $request->userid;
        $age = $request->age;
        $username = request('username');
        $products = array('table','chair','stool','Bodna');
        return view('homePage',compact('userid','age','username','products'));
    }
}
