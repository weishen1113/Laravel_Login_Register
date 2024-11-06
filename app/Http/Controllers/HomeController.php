<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home')->with('title', 'Home');
    }

    public function landingPage()
    {
        $data['title'] = 'Login';

        return view('user/login', $data);
    }
}
