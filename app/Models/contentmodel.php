<?php

namespace App\Models;

use CodeIgniter\Model;

class contentmodel extends Model
{
    protected $table                = 'home';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['judul','content'];
}