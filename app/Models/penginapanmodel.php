<?php

namespace App\Models;

use CodeIgniter\Model;

class penginapanmodel extends Model
{
    protected $table                = 'penginapan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['nama_penginapan', 'kontak', 'alamat'];
}
