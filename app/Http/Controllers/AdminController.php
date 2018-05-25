<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // //Index method for Admin Controller
    public function index()
    {
        return view('admin.home');
    }
    public function gen()
    {
        return view('vendor.laravel-admin.generator');
    }
    public function user()
    {
        return view('admin.users.form');
    }
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }
}
