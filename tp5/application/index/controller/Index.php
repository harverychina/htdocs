<?php
namespace app\index\controller;

use think\Controller;
use think\Validate;
class Index extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('login');
    }
    public function reg()
    {
        return view('reg');
    }
}
