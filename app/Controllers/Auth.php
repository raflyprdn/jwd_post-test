<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $authModel;
    protected $session = null;
    protected $request = null;

    public function __counstruct()
    {
        $this->authModel = new \App\Models\UserModel();
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        if ($this->request->getPost()) {

            $userModel = new \App\Models\UserModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $userModel->where('username', $username)->first();

            if ($user) {
                $salt = $user->salt;
                if ($user->password !== md5($salt . $password)) {
                    $this->session->setFlashdata('errors', ['Password Salah']);
                } else {
                    $sessData = [
                        'username' => $user->username,
                        'id' => $user->id,
                        'isLoggedIn' => TRUE
                    ];

                    $this->session->set($sessData);

                    return redirect()->to(base_url('kamutube/index'));
                }
            }
        }

        $data = [
            'title' => 'Login - KamuTube'
        ];

        echo view('auth/vlogin', $data);
    }

    public function register()
    {
        if ($this->request->getPost()) {

            $userModel = new \App\Models\UserModel();

            $user = new \App\Entities\User();

            $user->username = $this->request->getPost('username');
            $user->password = $this->request->getPost('password');
            $user->email = $this->request->getPost('email');
            $user->verification = $this->request->getPost('verification');
            $user->type = $this->request->getPost('type');

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
    }

    //--------------------------------------------------------------------

}
