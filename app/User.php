<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['users'] = $this->userModel->findAll();
        return view('admin/user/index', $data);
    }

    public function create()
    {
        return view('admin/user/create');
    }

    public function store()
    {
        $this->userModel->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'nama'     => $this->request->getPost('nama'),
            'level'    => $this->request->getPost('level')
        ]);
        return redirect()->to(base_url('user'))->with('success', 'User ditambahkan');
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);
        return view('admin/user/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'nama'     => $this->request->getPost('nama'),
            'level'    => $this->request->getPost('level')
        ];

        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $this->userModel->update($id, $data);
        return redirect()->to(base_url('user'))->with('success', 'User diperbarui');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to(base_url('user'))->with('success', 'User dihapus');
    }
}
