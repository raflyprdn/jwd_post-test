<?php

namespace App\Controllers;

class Kamutube extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'KamuTube'
        ];

        echo view('layouts/vheader', $data);
        echo view('user/home');
        echo view('layouts/vfooter');
    }

    public function account()
    {
        $data = [
            'title' => 'Account - KamuTube'
        ];

        echo view('layouts/vheader', $data);
        echo view('user/account');
        echo view('layouts/vfooter');
    }

    //--------------------------------------------------------------------

}
