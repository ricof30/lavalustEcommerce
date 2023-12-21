<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/

$router->get('/', 'Welcome::index');
$router->get('/home', 'Welcome::home');
$router->get('/shop', 'Welcome::shop');
$router->get('/product_detail', 'Welcome::product_detail');
$router->get('/cart', 'Welcome::cart');
$router->get('/checkout', 'Welcome::checkout');
$router->get('/about', 'Welcome::about');
$router->get('/contact', 'Welcome::contact');
$router->get('/order_history', 'Welcome::order_history');
$router->get('/privacy_policy', 'Welcome::privacy_policy');
$router->get('/login', 'Welcome::login');
$router->get('/register', 'Welcome::register');
$router->get('/wishlist', 'Welcome::wishlist');
$router->get('/adminLogin', 'Welcome::adminLogin');
//routes for register form validate
$router->post('/reg', 'User::register');
//routes for login form validate
$router->post('/log', 'User::login');
//routes for admin page
$router->get('/dashboard', 'Welcome::dashboard');
$router->get('/products', 'Welcome::products');
$router->post('/add_product', 'Admin::add_product');
$router->get('/registered', 'Welcome::registered');
$router->get('/list', 'Welcome::product_list');
$router->get('/order_list', 'Welcome::order_list');
$router->get('/chart', 'Welcome::chart');
$router->get('/sales', 'Admin::sales');
$router->get('/payment', 'Welcome::payment');


// $router->post('cart/(:any)', 'Admin::addToCart/$1');
$router->get( '/cart/(:any)', 'Admin::addToCart');
$router->get( '/removeItem/(:any)', 'Admin::removeItem');
$router->post('/placeOrder', 'Admin::placeOrder');
$router->post('/checkout', 'Admin::checkout');
$router->get('/product/(:any)', 'Admin::product');
$router->post('/totalAmount', 'Admin::totalAmount');
$router->post('/updateStatus', 'Admin::updateStatus');
$router->post('/paypal', 'Admin::paypal');
$router->post('/loggedIn', 'User::adminLogin');

// for delete and edit
$router->get('/deleteOrder/(:num)', 'Admin::deleteOrder');
$router->get('/deleteProduct/(:num)', 'Admin::deleteProduct');
$router->get('/edit/(:num)', 'Welcome::editform');
$router->post('/update', 'Admin::updateProduct');
$router->get('/logout', 'User::logout');
$router->get('/adminLogout', 'User::adminLogout');
