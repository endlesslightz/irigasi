<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pos extends BaseController
{
    public function index($id)
    {
        helper('filesystem');
        $citra = scandir("./upload/$id/", SCANDIR_SORT_DESCENDING);
        $data = [
            'link' => 'pos',
            'pos'   => $id,
            'cctv' => $id . '/' . $citra[0],
            'waktu' => filemtime("./upload/$id/$citra[0]")
        ];
        return view('pos', $data);
    }
}
