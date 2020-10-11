<?php

namespace App\Controllers;

class Kamutube extends BaseController
{
    protected $authModel;
    public function __counstruct()
    {
        $this->session = session();
        if ($this->session->sessData('isLoggedIn') != TRUE) { // ketika belum login
            redirect('auth'); //redirect kehalaman login
        } else if ($this->session->sessData('type') != 1) { // ketika bukan admin 
            redirect('kamutube'); //redirect ke halaman dashboard pengguna
        }

        $this->authModel = new \App\Models\UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'KamuTube'
        ];

        echo view('user/vhome', $data);
    }

    public function account($username)
    {
        $auth = $this->authModel->findAll();

        $data = [
            'title' => 'Account - KamuTube',
            'user' => $auth
        ];

        echo view('user/vaccount', $data);
    }

    public function account_edit()
    {
        $data = [
            'title' => 'Account - KamuTube'
        ];

        echo view('user/vaccount_edit', $data);
    }

    //--------------------------------------------------------------------

}
