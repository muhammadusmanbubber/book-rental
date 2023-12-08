<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Signup Routes
$routes->get('signup', 'Auth\AuthController::signup');
$routes->match(["get", "post"], 'signup', 'Auth\AuthController::userSignup');

// Login Routes
$routes->get('/', 'Auth\AuthController::login');
$routes->get('admin_login', 'Auth\AuthController::admin');
$routes->post('AdminLogin', 'Auth\AuthController::AdminLogin');
$routes->post('login', 'Auth\AuthController::userLogin');

// Users Routes
$routes->group('user', function ($routes) {
    $routes->get('home', 'User\UserController::home');
    $routes->get('profile/(:num)', 'User\UserController::profile/$1');
    $routes->get('edit/(:num)', 'User\UserController::edit/$1');
    $routes->post('update/(:num)', 'User\UserController::update/$1');
    $routes->get('rented_books', 'User\UserController::rented_books');
});

// Admin Routes
$routes->group('admin', function ($routes) {
    $routes->get('AdminHome', 'Admin\AdminController::AdminHome');
    $routes->get('rented-books', 'Admin\AdminController::rented_books');
    $routes->get('users', 'Admin\AdminController::users');
    $routes->get('edit/(:num)', 'Admin\AdminController::edit/$1');
    $routes->post('update/(:num)', 'Admin\AdminController::update/$1');
    $routes->get('delete/(:num)', 'Admin\AdminController::delete_user/$1');
    $routes->get('logout', 'Admin\AdminController::logout');
});

// Books Routes
$routes->group('books', function ($routes) {
    $routes->get('books', 'Books\BooksController::books');
    $routes->get('rent-book/(:num)', 'Books\BooksController::rent_book/$1');
    $routes->post('book-order', 'Books\BooksController::book_order');
    $routes->get('rented-books', 'Books\BooksController::rented_books');
    $routes->get('add-book', 'Books\BooksController::add_book');
    $routes->get('book-detail/(:num)', 'Books\BooksController::book_detail/$1');
    $routes->post('book', 'Books\BooksController::book');
    $routes->get('delete-book/(:num)', 'Books\BooksController::delete_book/$1');
});

$routes->get('logout', 'Auth\AuthController::logout');
