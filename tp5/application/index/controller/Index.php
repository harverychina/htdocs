<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        // home page
        return view('index');
    }

    public function login()
    {
        // login page
        return view('login');
    }

    public function register()
    {
        // register page
        return view('register');
    }
}
