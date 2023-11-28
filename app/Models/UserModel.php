<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'email','password'];
    public function checkUser($username,$password)
    {
        return $this->where(['username' => $username])->where(['password' => $password])->first();
            //return $this->where(['slug' => $slug])->first();
    }
    public function isUsernameExists($username)
    {
        return $this->where('username', $username)->countAllResults() > 0;
    }

    public function isEmailExists($email)
    {
        return $this->where('email', $email)->countAllResults() > 0;
    }
} 