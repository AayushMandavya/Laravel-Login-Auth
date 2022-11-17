<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function signup(request $req){

        $data= new User();
        $data->name = $req->name;
        $data->email=$req->email;
        $data->password =hash::make ($req->password);

        $data->save();
        return redirect('/login');
    }

    public function loginUser(request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = User::where('email','=',$req->email)->first();
        
        if($user){
            if(hash::check($req->password, $user->password)){
             return redirect('/');           
            }
            else{
                return back()->with('fail','Password not match');
            }

        }else{
            return back()->with('fail','User not found');
        }
    }
}
