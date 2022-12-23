<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJobs;

class Jobs extends BaseController
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
        return view('v_template', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Tambah Data Pekerjaan',
            'page' => 'jobs/v_tambah',
            'menu' => 'masterdata',
            'submenu' => 'jobs',
        ];
        return view('v_template', $data);
    }

    public function InsertData()
    {
        if ($this->validate([
            'Judul' => [
                'label' => 'Judul',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'perusahaan' => [
                'label' => 'Nama Perusahaan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'salary' => [
                'label' => 'Salary',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'TipeWaktu' => [
                'label' => 'Tipe Waktu',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan pilih salah satu {field} diatas',
                ]
            ],
            'Pengalaman' => [
                'label' => 'Pengalaman',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'Deskripsi' => [
                'label' => 'Deskripsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'Tags' => [
                'label' => 'Tags',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'kontak' => [
                'label' => 'Kontak',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
        ])){
            #jika valid
            $data = [
                'Judul'=>$this->request->getPost('Judul'),
                'perusahaan'=>$this->request->getPost('perusahaan'),
                'salary'=>$this->request->getPost('salary'),
                'TipeWaktu'=>$this->request->getPost('TipeWaktu'),
                'Pengalaman'=>$this->request->getPost('Pengalaman'),
                'Deskripsi'=>$this->request->getPost('Deskripsi'),
                'Tags'=>$this->request->getPost('Tags'),
                'kontak'=>$this->request->getPost('kontak'),
            ];
            $this->ModelJobs->InsertData($data);
            session()->setFlashdata('insert', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('Jobs'));
        }else {
            #jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Jobs/Tambah'))->withInput('validation',\Config\Services::validation());
        }
    }

    public function Edit($id)
    {
        $data = [
            'judul' => 'Edit Data Pekerjaan',
            'page' => 'jobs/v_edit',
            'menu' => 'masterdata',
            'submenu' => 'jobs',
            'jobs' => $this->ModelJobs->DetailData($id),
        ];
        return view('v_template', $data);
    }

    public function UpdateData($id)
    {
        if ($this->validate([
            'Judul' => [
                'label' => 'Judul',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'perusahaan' => [
                'label' => 'Nama Perusahaan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'salary' => [
                'label' => 'Salary',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'TipeWaktu' => [
                'label' => 'Tipe Waktu',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan pilih salah satu {field} diatas',
                ]
            ],
            'Pengalaman' => [
                'label' => 'Pengalaman',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'Deskripsi' => [
                'label' => 'Deskripsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'Tags' => [
                'label' => 'Tags',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'kontak' => [
                'label' => 'Kontak',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
        ])){
            #jika valid
            $data = [
                'id'=> $id,
                'Judul'=>$this->request->getPost('Judul'),
                'perusahaan'=>$this->request->getPost('perusahaan'),
                'salary'=>$this->request->getPost('salary'),
                'TipeWaktu'=>$this->request->getPost('TipeWaktu'),
                'Pengalaman'=>$this->request->getPost('Pengalaman'),
                'Deskripsi'=>$this->request->getPost('Deskripsi'),
                'Tags'=>$this->request->getPost('Tags'),
                'kontak'=>$this->request->getPost('kontak'),
            ];
            $this->ModelJobs->UpdateData($data);
            session()->setFlashdata('update', 'Data berhasil diupdate');
            return redirect()->to(base_url('Jobs'));
        }else {
            #jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Jobs/Edit/'.$id))->withInput('validation',\Config\Services::validation());
        }
    }

    public function Delete($id)
    {
        $data = [
            'id'=> $id,
        ];
        $this->ModelJobs->DeleteData($data);
        session()->setFlashdata('delete', 'Data berhasil dihapus');
        return redirect()->to(base_url('Jobs'));
    }

    public function Print()
    {
        $data = [
            'judul' => 'Data Pekerjaan',
            'menu' => 'masterdata',
            'submenu' => 'jobs',
            'jobs' => $this->ModelJobs->AllData(),
        ];
        return view('jobs/v_print', $data);
    }
}
