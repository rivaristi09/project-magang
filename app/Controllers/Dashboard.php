<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $level = session()->get('level');

        if ($level === 'admin') {
            return view('admin/dashboard'); // Pastikan file ini ada
        } elseif ($level === 'user') {
            return view('pengguna/dashboard'); // Pastikan file ini ada
        } else {
            return redirect()->to('/unauthorized');
        }
    }
}
