<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
      /**
     * Show Dashbaord
     */
    public function showdashBoard()
    {
        return view('admin.dashboard');
    }
}
