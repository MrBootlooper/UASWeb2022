<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function index()
    {
        $session = \Config\Services::session();
        return view('auth/index', ['pesan' => $session->getFlashdata('pesan')]);
    }

    public function register()
    {
        return view('v_register');
    }

    public function proses_register()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'repassword' => [
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'matches' => '{field} tidak sesuai',
                ]
            ]
        ])) {
            //jika valid
            $data = array(
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            );
            $this->ModelAuth->proses_register($data);
            session()->setFlashdata('pesan', 'Register Berhasil');
            return redirect()->to(base_url('Auth/register'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }

    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }

    public function proses_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->ModelAuth->login($email, $password);
            if ($cek) {
                //jika datanya sesuai
                session()->set('log', true);
                session()->set('username', $cek['username']);
                session()->set('email', $cek['email']);
                //login sukses
                return redirect()->to(base_url('dashboard'));
            } else {
                //jika datanya tidak sesuai
                session()->setFlashdata('pesan', 'Login Gagal, Username atau Password tidak sesuai');
                return redirect()->to(base_url('Auth/login'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->setFlashdata('pesann', 'Logout Sukses');
        return redirect()->to(base_url('auth/login'));
    }
}
