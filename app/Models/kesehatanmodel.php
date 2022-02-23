<?php

namespace App\Models;

use CodeIgniter\Model;

class kesehatanmodel extends Model
{
    protected $table                = 'infokes';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['desa','positif','dalam_perawatan' ,'sembuh','meninggal','level'];
}