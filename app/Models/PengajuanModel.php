<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 
        'nim', 
        'prodi', 
        'phone', 
        'semester', 
        'tahun_akademik', 
        'keperluan', 
        'alasan', 
        'tanggal_pengajuan',
        'status'
    ];
}