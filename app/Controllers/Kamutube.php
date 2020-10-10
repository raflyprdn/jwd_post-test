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
        echo view('user/vhome');
        echo view('layouts/vfooter');
    }

    public function account()
    {
        $data = [
            'title' => 'Account - KamuTube'
        ];

        echo view('layouts/vheader', $data);
        echo view('user/vaccount');
        echo view('layouts/vfooter');
    }

    public function account_edit()
    {
        $data = [
            'title' => 'Account - KamuTube'
        ];

        echo view('layouts/vheader', $data);
        echo view('user/vaccount_edit');
        echo view('layouts/vfooter');
    }

    //--------------------------------------------------------------------

}
