<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    public function getUsers()
    {
        return $this->db->table('users')->get()->getResult();
    }
}