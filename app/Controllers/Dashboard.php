<?php

namespace App\Controllers;

use App\Models\ModelJobs;

class Dashboard extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelJobs = new ModelJobs();
    }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_dashboard',
            'menu' => 'dashboard',
            'submenu' => '',
            'jobs' => $this->ModelJobs->AllData(),
        ];
        return view('v_template', $data);
    }

}
