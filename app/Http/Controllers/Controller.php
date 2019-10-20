<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Regester_user;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function Welcome (){
        return view('welcome');
    }
    
    
    public function Regester (){
        return view('regester_member');
    }

    public function Regester_new_Account(Request $request){
        $add_data["name_val"]      =$request->name;
        $add_data["email"]         =$request->email_value;
        $add_data["number_val"]    =$request->number;
        $add_data["password_val"]  =$request->password;       
        $add_data["date"]          = date("Y-m-d");
        // return $add_data;
        

        $Add_user = new Regester_user;
        $Add_user->full_name    =$add_data["name_val"];
        $Add_user->email        =$add_data["email"];
        $Add_user->ph_number    =$add_data["number_val"];
        $Add_user->password    =$add_data["password_val"];
        $Add_user->created_date =$add_data["date"];
        $Add_user->save();
        return \redirect('/');
    }
}
