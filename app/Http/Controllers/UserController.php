<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    
    public function index()
    {
        // Eloquent operation for Data insert and update in Database.

        /* $user=new User();
        $user->name='Saiful Islam';
        $user->email='saifulrubd@gmail.com';
        $user->password=bcrypt('password');
        $user->save(); */


        // Eloquent operation for fetch Data from Database.
        // $data=User::all();
        // return $data;

    //     DB::insert('insert into users (name,email,password) values(?,?,?)',['Saiful','saifulrubd@gmail.com','password']);
    //    return view('user');
    //    $data=DB::select('select * from users ');
    //    return $data;
    //    DB::update('update users set name=? where id=2',['Anusha']);
    //    $data=DB::select('select * from users ');
    //    return $data;
       return view('home');
    }

    public function upload_profile_image(Request $request)
    {
        if($request->hasFile('image'))
        {
           User::upload_profile_image($request->image);
           
           return redirect()->back()->with('message', 'Image uploaded successful!');
        }
        return redirect()->back()->with('error', 'Image  NOT uploaded !');
    }
}
