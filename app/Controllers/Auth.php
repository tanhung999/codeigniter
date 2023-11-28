<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        helper('form');
        // Hiển thị trang đăng nhập
        return view('admin/auth/login');
    }

    public function signup()
    {
        helper('form');
        // Hiển thị trang đăng ký
        return view('admin/auth/signup');
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request-getPost('password');
        $userModel = new App\Models\AuthModel();
        $user = $userModel->loginUser($username, $password);


        // Chuyển hướng sau khi đăng nhập thành công
        return redirect()->to('dashboard');
    }

    public function doRegister()
    {
        // Xử lý đăng ký
        // ...

        // Chuyển hướng sau khi đăng ký thành công
        return redirect()->to('login');
    }

    public function logout()
    {
        // Xử lý đăng xuất
        // ...

        // Chuyển hướng sau khi đăng xuất thành công
        return redirect()->to('login');
    }
}