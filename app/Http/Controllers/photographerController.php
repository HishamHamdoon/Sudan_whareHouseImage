<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photographer;
use App\Models\User;
use App\Models\Phone;
use App\Models\Photo;
// namespace App\Models;

class photographerController extends Controller
{
    public function getAll(){
        $photographers = Photographer::get();
        return view('file',compact('photographers'));
    
    }
    public function create(){
        return view('photographer.create');
    }
    public function store(Request $request){
        //upload file
        //get imahe extension
        $file_extension = $request->ph_photo->getClientOriginalExtension();
        //set image name from time formate 
        $file_name = time().'.'.$file_extension;
        //specify the path
        $path = 'images/photog';
        //move photo to specific folder
        $request->ph_photo->move($path,$file_name);
        Photographer::create([
            'name' => $request->ph_name,
            'email' => $request->ph_email,
            'photo' => $file_name,
            'age' => $request->ph_age,
            'birthdate' => $request->ph_bdate,
    ]);
    //return back
    return redirect()->back()->with(['msg'=>"data inserted Successfully"]);
    }

    //index function to show all of photos
    public function index(){

        $photos = Photo::get();
        return view('photographer.index',compact('photos'));

    }

    //show single image in details
    public function show($id){

        $photo = Photo::find($id);
        return view('photographer.show',compact('photo'));
        
    }
    //this function for test bootstrap grid
    public function test12(){
        // return view('photographer.test');
        $user =  User::with(['phone' => function ($q) {
            $q->select('code','user_id');
        }])->find(1);
        return $user;
        // return $user->phone;
    }

    public function test1(){
        // return view('photographer.test');
        $user =  Phone::with(['user' =>function($query){
            $query->select('email','age');
        }])->find(1);
        // return $user->User->email;
        return $user;

        
    }

    public function test(){
        $user =  User::find(1);
        return $user->hasOne('phone');
    }
    public function user(){
    //  return User::find(1)->with('phone');
    
    }

    
}
