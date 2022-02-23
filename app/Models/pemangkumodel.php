<?php

namespace App\Models;

use CodeIgniter\Model;

class pemangkumodel extends Model
{
    protected $table                = 'pemangku';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['nama','kontak', 'alamat'];
}