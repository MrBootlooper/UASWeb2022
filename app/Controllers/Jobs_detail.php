<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJobs;

class Jobs_detail extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelJobs = new ModelJobs();
    }

   public function index()
   {
    $data = [
        'judul' => 'Data Pekerjaan',
        'page' => 'jobs/v_jobs',
        'menu' => 'masterdata',
        'submenu' => 'jobs',
        'jobs' => $this->ModelJobs->AllData(),
    ];
        return view('v_jobsdetail', $data);
   }

   public function jobs_detail($id)
	{
		$data = [
            'jobs' => $this->ModelJobs->get_all_jobs_by_id($id),
        ];
		return view('v_detailjobs', $data);
	}
}

