<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\AdminModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }
    
    public function userLogin()
    {
        if (
            $this->request->getMethod() === 'post' &&
            $this->validate([
                'email' => 'required',
                'password' => 'required',
            ])
        ) {
            $login = new AuthModel();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $check = $login->where('email', $email)->first();
            if (empty($check)) {
                $this->session->setFlashdata('error', 'The email or password that you 
                entered does not match our records.');
                return redirect()->to('/');
            }
            if ($check['password'] == $password) {
                session()->set('users', $check);
                return redirect()->to('user/home');
            } else {
                $this->session->setFlashdata('error', 'Ivalid Email & Password');
                return redirect()->to('/');
            }
        } else {
            return view('auth/login', ['validation' => $this->validator]);
        }
    }

    public function signup()
    {
        return view('auth/signup');
    }

    public function userSignup()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required|min_length[3]|max_length[30]',
                'email' => 'trim|required|valid_email|is_unique[users.email]',
                'password' => 'trim|required|min_length[5]|max_length[25]|matches[cpassword]',
                'cpassword' => 'trim|required',
            ];
            if (!$this->validate($rules)) {
                return view('auth/signup', ['validation' => $this->validator]);
            } else {
                $signup = new AuthModel();
                $data = [
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password'),
                    'cpassword' => $this->request->getPost('cpassword'),
                ];
                $session = session();
                $this->session->setFlashdata('success', 'Signup Successfuly');
                $signup->save($data);
                return view('auth/login', $data);
            }
        }
    }

    public function admin()
    {
        return view('auth/admin_login');
    }

    public function AdminLogin()
    {
        $this->validation->setRules([
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($this->validation->run($this->request->getPost()) === FALSE) {
            return view('auth/admin_login', ['validation' => $this->validation]);
        } else {
            $login = new AdminModel();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $check = $login->where('email', $email)->first();
            if ($check['password'] == $password) {
                session()->set('admin', $check);
                return redirect()->to(base_url('admin/AdminHome'));
            } else {
                $this->session->setFlashdata('error', 'Wrong Email & Password');
                return redirect()->to('admin_login');
            }
        }
    }

    public function logout()
    {
        session()->destroy('users');
        return redirect()->to('/');
    }

}
