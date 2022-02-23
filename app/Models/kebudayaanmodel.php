<?php

namespace App\Models;

use CodeIgniter\Model;

class kebudayaanmodel extends Model
{
    protected $table                = 'kebudayaan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['judul', 'foto', 'keterangan'];
}
