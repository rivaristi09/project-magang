<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModel extends Model
{
    protected $table      = 'surat_keluar';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $allowedFields = [
        'tahun', 'no_surat', 'tanggal_surat', 'tanggal_keluar',
        'kepada', 'perihal', 'pembuat_surat', 'divisi',
        'courier', 'tanggal_buat', 'tanggal_update', 'file'
    ];
}
