<?php

namespace App\Models;

class AuthModel extends Model
{
    protected $table = 'users'; // Thay đổi thành tên bảng người dùng thực tế

    public function registerUser($data)
    {
        // Đăng ký người dùng
        // ...
    }

    public function loginUser($username, $password)
    {
        return $this->where('username', $username)->first();
    }
}