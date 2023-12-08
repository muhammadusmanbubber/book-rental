<?php

namespace App\Controllers\Books;

use App\Controllers\BaseController;
use App\Models\BookModel;
use App\Models\RentalModel;

class BooksController extends BaseController
{
    public function books()
    {
        $books = new BookModel();
        $info['infodata'] = $books->paginate(5);
        $info['pager'] = $books->pager;
        return view('books/books', $info);
    }

    public function book_detail($id)
    {
        $show = new BookModel();
        $data['show'] = $show->find($id);
        return view('books/book_detail', $data);
    }

    public function rent_book($id)
    {
        $show = new BookModel();
        $data['show'] = $show->find($id);
        return view('books/rent_book', $data);
    }

    public function add_book()
    {
        return view('books/add_book');
    }

    public function book()
    {
        $addBook = new BookModel();
        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/assets/upload/', $newName);
            }
        }
        $data = [
            'title' => $this->request->getPost('title'),
            'Auther_name' => $this->request->getPost('Auther_name'),
            'pages' => $this->request->getPost('pages'),
            'publish_date' => $this->request->getPost('publish_date'),
            'image' => $newName ?? '',
        ];
        $addBook->save($data);
        $this->session->setFlashdata('success', 'Book added Successfuly!!');
        return redirect()->to(base_url('books/books'));
    }

    public function delete_book($id)
    {
        $book = new BookModel();
        $book->delete($id);
        return redirect()->back();
    }

    public function book_order()
    {
        $this->validation->setRules([
            'book_id' => [
                'rules'  => 'required|is_unique[rentals.book_id]',
                'errors' => [
                    'is_unique' => 'Sorry! This book is already Rented.',
                ],
            ],
        ]);
        if ($this->validation->run($this->request->getPost()) === FALSE) {
            return redirect()->back()->with('validation', $this->validation);
        } else {
            $finalOrder = new RentalModel();
            $data = [
                'user_id' => $this->request->getPost('user_id'),
                'book_id' => $this->request->getPost('book_id'),
                'rental_date' => $this->request->getPost('rental_date'),
                'return_date' => $this->request->getPost('return_date'),
            ];
            $finalOrder->save($data);
            $this->session->setFlashdata('success', 'Congratulatioin! You Rent a Book.');
            return redirect()->to('user/home');
        }
    }
}
