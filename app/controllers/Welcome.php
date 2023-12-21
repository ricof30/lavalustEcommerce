<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {

	    
	public function __construct(){
		parent::__construct();
		$this->call->helper('url');
		$this->call->library('session');
		$this->call->library('form_validation');
		$this->call->model('Main_model');
		$this->call->database();

	}
	

    private function isUserLoggedIn() {
        // Check if the 'logged_in' session variable is set
        return $this->session->userdata('logged_in') == 1;
    }

	private function isAdminLoggedIn() {
        // Check if the 'logged_in' session variable is set
        return $this->session->userdata('adminLogged_in') == 1;
    }
	public function index() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('welcome_page');
	}
	public function home() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/home');
	}
	public function shop() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/shop');
	}
	public function product_detail() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/product_detail');
	}
	public function product_details($id) {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/product_detail');
	}
	public function cart() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/cart');
	}	
	public function checkout() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/checkout');
	}
	public function about() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/about');
	}
	public function contact() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/contact');
	}
	public function privacy_policy() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/privacy_policy');
	}
	public function login() {
		$this->call->view('userSide/login');
	}

	public function order_history() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
			$this->call->view('userSide/order_history');
	}

	public function register() {
		$this->call->view('userSide/register');
	}
	public function wishlist() {
		if (!$this->isUserLoggedIn()) {
            return redirect('login');
        }
		$this->call->view('userSide/wishlist');
	}

	// routes for admin page
	public function dashboard() {
		if (!$this->isAdminLoggedIn()) {
            return redirect('adminLogin');
        }
		$this->call->view('admin/dashboard');
	}
	public function products() {
		if (!$this->isAdminLoggedIn()) {
            return redirect('adminLogin');
        }
		$this->call->view('admin/products');
	}
	public function registered() {
		if (!$this->isAdminLoggedIn()) {
            return redirect('adminLogin');
        }
		$this->call->view('admin/registered_user');
	}

	public function AdminRegister() {
		$this->call->view('admin/register');
	}

	public function AdminLogin() {
		$this->call->view('admin/login');
	}
	public function product_list() {
		if (!$this->isAdminLoggedIn()) {
            return redirect('adminLogin');
        }
		$this->call->view('admin/product_list');
	}
	public function order_list() {
		if (!$this->isAdminLoggedIn()) {
            return redirect('adminLogin');
        }
		$this->call->view('admin/order_list');
	}

	public function chart() {
		if (!$this->isAdminLoggedIn()) {
            return redirect('adminLogin');
        }
		$this->call->view('admin/chart');
	}

	public function payment() {
		if (!$this->isAdminLoggedIn()) {
            return redirect('adminLogin');
        }
		$this->call->view('admin/payment_list');
	}

	public function editForm($id) {
	
		if (!$this->isAdminLoggedIn()) {
            return redirect('adminLogin');
        }
		$this->call->model('Product_model');
		$data = $this->Product_model->getProductById($id);
        $this->call->view('admin/product_edit', $data);
	}
	
	
}
?>