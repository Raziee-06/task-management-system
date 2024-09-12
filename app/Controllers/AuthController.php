<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('layout/header') . view('login') . view('layout/footer');
    }
    public function register()
    {
        return view('layout/header') . view('signup') . view('layout/footer');
    }

    public function home()
    {
        return view('layout/header') . view('home') . view('layout/footer');
    }

    public function process_register()
    {
        $UserModel = new UserModel();

        $name = $this->request->getPost('name');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');

        $data = [
            'fullname' => $name,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email' => $email,
        ];

        //check username dah wujud atau belum
        $checkuser = $UserModel->where('username', $username)->first();
        if ($checkuser) {
            return redirect()->to('/register')->with('error', 'username already exist');
        }
        $UserModel->insert($data);
        return redirect()->to('/login')->with('sucsess', 'Register success');
    }


    public function process_login()
    {
        $UserModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'username' => $username,
            'password' => $password,
        ];
        $checkuser = $UserModel->where('username', $username)->first();
        if ($checkuser && password_verify($data['password'], $checkuser['password'])) {
            session()->set([
                'username' => $checkuser['username'],
                'email' => $checkuser['email'],
                'fullname' => $checkuser['fullname'],
                'isLoggedIn' => true,
            ]);

            return redirect()->to('/profile');
        } else {
            return redirect()->to("/login")->with('error', 'invalid credentials');
        }
    }



    public function profile()
    {
        $data = array();

        $data['name'] = session()->get('fullname');
        $data['username'] = session()->get('username');
        $data['email'] = session()->get('email');
        $data['password'] = "123456";

        return view('layout/header') .
            view('profile', $data) .
            view('layout/footer');
    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
