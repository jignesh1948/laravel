<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view('matches');    
    }
    public function singleProfile(Request $request,$id){
    	$data  = User::where("id",$id)->get()->first();
    	dd($data);
    	return view('single_profile')->with(compact('data'));    
    }
}
