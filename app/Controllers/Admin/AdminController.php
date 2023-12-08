<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\BookModel;
use App\Models\RentalModel;

class AdminController extends BaseController
{
    public function AdminHome()
    {
        $users = new AuthModel();
        $books = new BookModel();
        $rental = new RentalModel();
        $allUsers = $users->countAll();
        $allBooks = $books->countAll();
        $allRentedBooks = $rental->countAll();
        $data = [
            'UserCount' => $allUsers,
            'bookCount' => $allBooks,
            'RentedBookCount' => $allRentedBooks,
        ];
        return view('admin/home', $data);
    }

    public function users()
    {
        $total_users = new AuthModel();
        $data['total_users'] = $total_users->findAll();
        return view('admin/users', $data);
    }

    public function edit($id)
    {
        $show = new AuthModel();
        $data['shows'] = $show->find($id);
        return view('admin/edit_user_profile', $data);
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
        return redirect()->to(base_url('admin/users'));
    }

    public function delete_user($id = null)
    {
        $users = new AuthModel();
        $users->delete($id);
        return redirect()->back();
    }

    public function rented_books()
    {
        $builder = $this->db->table('rentals');
        $builder->select('*');
        $builder->join('users', 'users.id = rentals.user_id');
        $builder->join('books', 'books.id = rentals.book_id');
        $data['rented_books'] = $builder->get()->getResultArray();
        return view('admin/rented_books', $data);
    }

    public function logout()
    {
        session()->destroy('admin');
        return redirect()->to('admin_login');
    }
}
