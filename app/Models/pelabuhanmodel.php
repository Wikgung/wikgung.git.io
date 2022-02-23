<?php

namespace App\Models;

use CodeIgniter\Model;

class pelabuhanmodel extends Model
{
    protected $table                = 'pelabuhan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['nama','tujuan','alamat','kontak' ,'jadwal'];
}