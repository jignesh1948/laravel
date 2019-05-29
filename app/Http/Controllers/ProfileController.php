<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Religion;
use DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view('matches');    
    }
    public function singleProfile(Request $request,$id){
           $photoList = User::with('category') 

          // ->orderBy('photo_createddate', 'DESC')
          ->get();
          foreach($photoList as $key=>$data){
            dd($data);
          }
          // dd($photoList);

    	$data  = User::where("id",$id)->get()->first()->religion;
    	$alal = User::find(2)->religion;
    	$all = Religion::get();
    	 
    	dd($alal);
    	return view('single_profile')->with(compact('data'));    
    }
}
