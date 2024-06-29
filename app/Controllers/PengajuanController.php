<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use CodeIgniter\Controller;

class PengajuanController extends Controller
{
    public function detail($id)
    {
        $pengajuanModel = new PengajuanModel();
        $data['pengajuan'] = $pengajuanModel->find($id);

        return view('pengajuan_detail', $data);
    }
}