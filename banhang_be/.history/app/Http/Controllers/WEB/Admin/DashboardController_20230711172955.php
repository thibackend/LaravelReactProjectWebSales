<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     echo " start dashboard";
    // }

    function index()
    {
        echo " start dashboard";
        return "<h2>Welcome to Dashboard</h2>";
    }
}
