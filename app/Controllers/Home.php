<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    
    public function __construct()
    {
        helper(['form', 'url', 'file', 'security']);
        $this->MahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $mahasiswa = [
            'mahasiswa'    => $this->MahasiswaModel->findAll(),
        ];

        echo view('welcome_message', $mahasiswa);
    }

    public function insert(){

        $nim = $this->request->getVar('nim');  
        $nama = $this->request->getVar('nama');
        $data = [
            'nim'    => $nim,
            'nama' => $nama,
        ];
        $this->MahasiswaModel->insert($data);

    return redirect()->back()->with('message','Data Berhasil Ditambahkan!');

    }
}