<?php

namespace App\Controllers;

use App\Models\UserModel;

class Kamutube extends BaseController
{
    protected $userModel;
    protected $session;

    public function __construct()
    {
        $this->session = session();
        // dd($this->session->get('user_id'));
        $this->userModel = new UserModel();

        if ($this->session->isLoggedIn == TRUE) {
            return redirect()->to(base_url('kamutube/index'));
        } else {
            return redirect()->to(base_url('auth/index'));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'KamuTube'
        ];

        echo view('user/vhome', $data);
    }

    public function account()
    {
        $user = $this->userModel->where(['user_id' => $this->session->get('user_id')])->first();
        // dd($user);

        $data = [
            'title' => 'Account - KamuTube',
            'user' => $user
        ];

        // dd($data);

        return view('user/vaccount', $data);
    }

    public function account_edit()
    {
        $user = $this->userModel->where(['user_id' => $this->session->get('user_id')])->first();
        // dd($user);

        $data = [
            'title' => 'Account - KamuTube',
            'user' => $user
        ];

        echo view('user/vaccount_edit', $data);
    }

    public function save_account()
    {

        $this->userModel->save([
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone')
        ]);

        redirect()->to('kamutube/account');
    }

    public function video()
    {
        $user = $this->userModel->where(['user_id' => $this->session->get('user_id')])->first();
        $data = [
            'title' => $user['username'] . ' - KamuTube'
        ];

        return view('user/vvideo', $data);
    }

    public function save_video()
    {
    }

    public function delete_video()
    {
    }

    //--------------------------------------------------------------------

}
