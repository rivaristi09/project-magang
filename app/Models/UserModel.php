<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    // ✅ Field yang boleh diisi
    protected $allowedFields = ['nama', 'username', 'password', 'level'];

    // Opsional: untuk keamanan
    protected $useTimestamps = false;
}
