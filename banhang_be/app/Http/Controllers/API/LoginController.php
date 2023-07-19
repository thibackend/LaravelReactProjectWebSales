<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $resquest)
    {
        $user = Account::where('username', $resquest->username)->first();
        if(!$user || !Hash::check($resquest->password,$user->password)){
            return $this->commonResponse([],"Invalid username",404);
        }
        $token = $user->createToken('authToken')->plainTextToken;
        return $this->commonResponse([
            'accessToken'=>$token,
        ],  'logged in',200);
    }
}
