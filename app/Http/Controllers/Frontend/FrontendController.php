<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FrontendController extends Controller
{

/**
 * show home page
 */
public function ShowHomePage()
{
    return view('frontend.home');
}


/**
 * show menu page
 */
public function ShowMenuPage()
{
    return view('frontend.menu');
}

/**
 * show blog page
 */
public function ShowBlogPage()
{
    return view('frontend.blog');
}
/**
 * show staff page
 */
public function ShowStaffPage()
{
    return view('frontend.staff');
}

}

