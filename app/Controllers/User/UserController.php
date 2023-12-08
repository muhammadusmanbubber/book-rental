<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\BookModel;
use App\Models\RentalModel;

class UserController extends BaseController
{
    public function __construct()
    {
        helper(["common"]);
    }

    public function home()
    {
        $books = new BookModel();
        $data['books'] = $books->findAll();
        if ($this->request->getGet('')) {
            $this->session->setFlashdata('error', 'This book is already ');
            return redirect()->to('admin_login');
        }
        return view('user/home', $data);
    }

    public function profile($id)
    {
        $user = new AuthModel();
        $data = $user->find($id);
        return view('user/profile', $data);
    }

    public function edit($id)
    {
        $shows = new AuthModel();
        $data['shows'] = $shows->find($id);
        return view('user/edit_profile', $data);
    }

    public function update($id)
    {
        $update = new AuthModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'cpassword' => $this->request->getPost('cpassword'),
        ];
        $update->update($id, $data);
        return redirect()->to('user/home');
    }

    public function rented_books()
    {
        $builder = new RentalModel();
        $builder->select('*');
        $builder->join('users', 'users.id = rentals.user_id');
        $builder->join('books', 'books.id = rentals.book_id');
        $user_id = $this->session->get('users')['id'];
        $builder->where('rentals.user_id', $user_id);
        $data['rented_books'] = $builder->get()->getResultArray();
        return view('books/rented_books', $data);
    }
}
