<?php

namespace App\Models;

use CodeIgniter\Model;

class galconmodel extends Model
{
    protected $table                = 'galeri';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['foto','keterangan'];
}