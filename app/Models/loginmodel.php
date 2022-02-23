<?php

namespace App\Models;

use CodeIgniter\Model;

class loginmodel extends Model
{
    protected $table                = 'login';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'object';
    protected $allowedFields        = ['username', 'password', 'nama', 'email', 'alamat','foto'];
}
