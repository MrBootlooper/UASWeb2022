<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function proses_register($data)
    {
        $this->db->table('admin')->insert($data);
    }

    public function login($email, $password)
    {
        return $this->db->table('admin')->where([
            'email'=>$email,
            'password'=>$password,
        ])->get()->getRowArray();
    }
}