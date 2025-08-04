<?php
// app/Controllers/Auth.php
namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'id'        => $user['id'],
                'username'  => $user['username'],
                'nama'      => $user['nama'],
                'level'     => $user['level'],
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }
    public function register()
{
    return view('auth/register');
}

public function registerProcess()
{
    $nama     = $this->request->getPost('nama');
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $confirm  = $this->request->getPost('confirm');

    if ($password !== $confirm) {
        return redirect()->back()->with('error', 'Password tidak cocok!');
    }

    $userModel = new \App\Models\UserModel();

    // Cek apakah username sudah ada
    if ($userModel->where('username', $username)->first()) {
        return redirect()->back()->with('error', 'Username sudah digunakan.');
    }

    $userModel->insert([
        'nama'     => $nama,
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'level'    => 'user', // default: user
    ]);

    return redirect()->to('/login')->with('success', 'Akun berhasil dibuat. Silakan login.');
}


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
