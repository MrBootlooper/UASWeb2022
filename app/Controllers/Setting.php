<?php

namespace App\Controllers;

class Setting extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Setting',
            'page' => 'v_setting',
            'menu' => 'setting',
            'submenu' => 'setting',
        ];
        return view('v_template', $data);
    }
}
