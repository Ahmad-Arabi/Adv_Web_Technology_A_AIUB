<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PagesController extends Controller
{
    function logout()
    {
        if(session()->has('email'))
        {
            session()->flush();
        }
        return redirect()->route('login');
    }

    function home()
    {
        if(session()->has('email'))
        {
            $value1 = session()->get('name');
            $value2 = session()->get('type');

            return view('home')
            ->with('name1',$value1)
            ->with('type1',$value2);
        }
        return redirect()->route('logout');
    }

    function login()
    {
        if(session()->has('email'))
        {
            return redirect()->route('root');
        }
        return view('login');
    }

    function create()
    {
        if(session()->has('email'))
        {
            return redirect()->route('root');
        }
        return view('create');
    }

    function loginSubmit(Request $req)
    {
        $req->validate(
            [
               "email"=>"required",
               "password"=>"required"
            ],[]
           );

        $users = User::all();
        $users = User::where('email',$req->email)->where('password',$req->password)->select('name','email','type')->first();

        $us = array($users);

        if($us[0] === null)
        {
            return redirect()->route('login');
            
        }
        else
        {
            $p = $req->input();
            $req->session()->put('email', $us[0]->email);
            $req->session()->put('name', $us[0]->name);
            $req->session()->put('type', $us[0]->type);
 
            return redirect()->route('root');
        }
    }

    function createSubmit(Request $req)
    {
        $req->validate(
             [
                "name"=>["required","regex:/^[\pL\s]+$/u"],
                "email"=>["required","unique:users,email"], #(unique:table_name,column_name)
                "password"=>["required","min:8","regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/"]
             ],
             [
                "name.regex"=> "Name must be alphabetic",
                "email.unique"=> "Email has already been used for another account",
                "password.min"=> "Password has to be more than 8 characters",
                "password.regex"=> "Password must contain upper case, lower case, number and special 
                characters"
             ]
            );
        
        $u1 = new User();
        $u1->name = $req->name;
        $u1->email = $req->email;
        $u1->password = $req->password;
        if(!is_null($req->type))
        {
            $u1->type = $req->type;
        }
        $u1->save();

        return redirect()->route('login');
    }

    function list()
    {
        if(session()->has('email'))
        {
            $users = User::all();
            $users = User::where('id','<>','-1')->select('id','name')->get();
            
            return view('userlist')
                ->with('users',$users);
        }
        else
        {
            return redirect()->route('logout');
        }
    }

    function details($id)
    {
        if(session()->has('email'))
        {
            $users = User::all();
            $users = User::where('id',$id)->select('id','name','email','type')->first();
            
            return view('userdetails')
                ->with('u',$users);
        }
        else
        {
            return redirect()->route('logout');
        }        
    }
}