<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function store()
    {
        $userModel = new UserModel();
        
        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $userModel->save($data);

        return redirect()->to('/auth/login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $user = $userModel->where('username', $username)->first();
        
        if ($user && password_verify($password, $user['password'])) {
            $this->session->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'username' => $user['username'],
                'isLoggedIn' => true,
            ]);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function dashboard()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }

        return view('dashboard');
    }

    public function eServices()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }

        return view('eservices');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }

   public function suratRekomendasiMahasiswa()
{
    if (!$this->session->get('isLoggedIn')) {
        return redirect()->to('/auth/login');
    }

    $pengajuanModel = new \App\Models\PengajuanModel();
    $data['pengajuan'] = $pengajuanModel->findAll();

    return view('surat_rekomendasi_mahasiswa', $data);
}

public function tambahPengajuan()
{
    if (!$this->session->get('isLoggedIn')) {
        return redirect()->to('/auth/login');
    }

    return view('tambah_pengajuan');
}

public function storePengajuan()
{
    $pengajuanModel = new \App\Models\PengajuanModel();

    $data = [
        'nama' => $this->request->getPost('nama'),
        'nim' => $this->request->getPost('nim'),
        'prodi' => $this->request->getPost('prodi'),
        'phone' => $this->request->getPost('phone'),
        'semester' => $this->request->getPost('semester'),
        'tahun_akademik' => $this->request->getPost('tahun_akademik'),
        'keperluan' => $this->request->getPost('keperluan'),
        'alasan' => $this->request->getPost('alasan'),
        'tanggal_pengajuan' => date('Y-m-d'),
        'status' => 'Diproses'
    ];

    $pengajuanModel->save($data);

    return redirect()->to('/surat_rekomendasi_mahasiswa');
}
}
