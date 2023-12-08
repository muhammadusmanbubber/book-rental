<?php
    function get_book_data()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('rentals');
        $builder->select('*');
        $builder->join('users', 'users.id = rentals.user_id');
        $builder->join('books', 'books.id = rentals.book_id');
        $data['rented_books'] = $builder->get()->getResultArray();
        return view('books/rented_books', $data);
    }
    
    ?>