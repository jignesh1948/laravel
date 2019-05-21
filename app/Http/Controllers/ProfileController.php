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

    	$phone = User::find(1)->Blodegroup;
    	
    	dd($phone);
    	return view('single_profile')->with(compact('data'));    
    }
}
