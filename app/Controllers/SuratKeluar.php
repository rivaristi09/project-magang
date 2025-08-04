<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SuratKeluarModel;

class SuratKeluar extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new SuratKeluarModel();
    }

    public function index()
    {
        $data['surat'] = $this->model->findAll();
        return view('admin/surat_keluar/index', $data);
    }

    public function create()
    {
        return view('admin/surat_keluar/create');
    }

    public function store()
    {
        $file = $this->request->getFile('file');
        $fileName = null;

        if ($file && $file->isValid()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/surat_keluar', $fileName);
        }

        $this->model->save([
            'tahun'          => $this->request->getPost('tahun'),
            'no_surat'       => $this->request->getPost('no_surat'),
            'tanggal_surat'  => $this->request->getPost('tanggal_surat'),
            'tanggal_keluar' => $this->request->getPost('tanggal_keluar'),
            'kepada'         => $this->request->getPost('kepada'),
            'perihal'        => $this->request->getPost('perihal'),
            'pembuat_surat'  => $this->request->getPost('pembuat_surat'),
            'divisi'         => $this->request->getPost('divisi'),
            'courier'        => $this->request->getPost('courier'),
            'tanggal_buat'   => date('Y-m-d'),
            'tanggal_update' => date('Y-m-d'),
            'file'           => $fileName,
        ]);

        return redirect()->to('/admin/surat-keluar');
    }

    public function edit($id)
    {
        $data['surat'] = $this->model->find($id);
        return view('admin/surat_keluar/edit', $data);
    }

    public function update($id)
    {
        $file = $this->request->getFile('file');
        $data = [
            'tahun'          => $this->request->getPost('tahun'),
            'no_surat'       => $this->request->getPost('no_surat'),
            'tanggal_surat'  => $this->request->getPost('tanggal_surat'),
            'tanggal_keluar' => $this->request->getPost('tanggal_keluar'),
            'kepada'         => $this->request->getPost('kepada'),
            'perihal'        => $this->request->getPost('perihal'),
            'pembuat_surat'  => $this->request->getPost('pembuat_surat'),
            'divisi'         => $this->request->getPost('divisi'),
            'courier'        => $this->request->getPost('courier'),
            'tanggal_update' => date('Y-m-d'),
        ];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/surat_keluar', $fileName);
            $data['file'] = $fileName;
        }

        $this->model->update($id, $data);
        return redirect()->to('/admin/surat-keluar');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/admin/surat-keluar');
    }
}
