<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        return view ('layout/header').view('login').view('layout/footer');
    }
    public function register()
    {
        return view ('layout/header').view('signup').view('layout/footer');
    }

    public function home()
    {
        return view ('layout/header').view('home').view('layout/footer');
    }

    public function profile()
    {
        $data =array();
        $data['nama'] = "Razi";
        $data['username'] = "razi";
        $data['email'] = "arulrazi15@gmail.com";
        $data['password'] = "123456";
        


        return view ('layout/header').view('profile', $data).view('layout/footer');
    }
}
