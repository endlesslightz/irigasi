<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Grafik extends BaseController
{

    public function index($id)
    {
        $data = [
            'link' => 'grafik',
            'pos'   => $id
        ];
        return view('grafik', $data);
    }
}
