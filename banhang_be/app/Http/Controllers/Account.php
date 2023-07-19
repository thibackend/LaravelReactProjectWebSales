<?php

namespace App\Http\Controllers;

use App\Models\Account as ModelsAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Account extends Controller
{
    public function store( Request $request){
        $request['password'] = Hash::make($request->password);
        $user = ModelsAccount::create($request->all());

        if($user->fails()){
            return  $this->commonResponse([],"User Not Found",400);
        }
          return  $this->commonResponse($user,"",200);
    }
    public function current_user(){
        
        $user = auth()->user();

        if(!$user){
            return  $this->commonResponse([],"User Not Found",400);
        }
          return  $this->commonResponse($user,"",200);
    }
}
