<?php

namespace App\Models;

use CodeIgniter\Model;

class tokohadatmodel extends Model
{
    protected $table                = 'tokohadat';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['nama','kontak', 'alamat'];
}