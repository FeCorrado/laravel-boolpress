<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{/*
    @return void 
*/
    public function __construct()
    {
        $this->middleware('auth');
    }
    /*
    @return /Illuminate/Contracts/Support/Renderable
*/
    public function index()
    {
        return view('admin.home');
    }
}
