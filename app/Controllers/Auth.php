<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Auth extends BaseController
{

    public function index()
    {
        //dd($this->request->getVar());
        if ($this->request->getPost()) {

            $userModel = new \App\Models\UserModel();
            $session = session();

            $username = $this->request->getPost('username');
            $password = md5($this->request->getPost('password'));

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                // dd($password);
                if ($user['password'] == $password) {

                    $sessData = [
                        'username' => $user['username'],
                        'user_id' => $user['user_id'],
                        'isLoggedIn' => TRUE
                    ];

                    // dd($sessData);
                    $session->set($sessData);

                    return redirect()->to(base_url('kamutube/index'));
                } else {
                    return redirect()->to(base_url('auth/index'));
                }
            }
        }

        $data = [
            'title' => 'Login - KamuTube'
        ];

        return view('auth/vlogin', $data);
    }

    public function register()
    {
        if ($this->request->getPost()) {

            $userModel = new \App\Models\UserModel();

            $user = [
                'username' => $this->request->getPost('username'),
                'password' => md5($this->request->getPost('password')),
                'email' => $this->request->getPost('email'),
                'verification' => $this->request->getPost('verification'),
                'type' => $this->request->getPost('type')
            ];

            $userModel->save($user);

            return view('auth/vlogin');
        }

        $data = [
            'title' => 'Register - KamuTube'
        ];

        echo view('auth/vregister', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return view('auth/vlogin');
    }

    //--------------------------------------------------------------------

}
