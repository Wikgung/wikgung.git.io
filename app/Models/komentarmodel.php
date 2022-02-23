<?php

namespace App\Models;

use CodeIgniter\Model;

class komentarmodel extends Model
{
    protected $table                = 'komentar';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType = 'object';
    protected $allowedFields        = ['nama','isi'];
}