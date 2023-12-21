<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
    public function __construct(){
		parent::__construct();
		$this->call->model('Main_model');
		$this->call->model('Admin_model');
		$this->call->database();

	}
	public function index() {
		$this->call->view('welcome_page');
	}
	
    public function register()
{
    // Validate form input
    $this->form_validation
        ->name('name')
        ->required()
        ->min_length(3)
        ->max_length(40)
        ->name('number')
        ->required()
        ->max_length(11)
        ->name('password')
        ->required()
        ->min_length(8)
        ->name('confpassword')
        ->matches('password')
        ->required()
        ->min_length(8)
        ->name('email')
        ->valid_email();

    // Check if validation fails
    if ($this->form_validation->run() == FALSE) {
        $this->call->view('userSide/register');
    } else {
        // Check if email already exists
        $existingEmail = $this->Admin_model->get_user_by_email($this->io->post('email'));

        if ($existingEmail) {
            // Email already registered, display an error
            $this->call->view('userSide/register', ['error_message' => 'Email already registered']);
        } else {
            // Generate email token
            $email_token = md5(uniqid(rand(), true));

            // Perform user registration
            if ($this->registerUser($this->io->post('name'), $this->io->post('number'), $this->io->post('email'), $email_token, $this->io->post('password'))) {
                // Registration successful, redirect to login or show success message
				$this->call->view('userSide/login', ['success_message' => 'Registered Successfully!']);
            } else {
                // Registration failed, show an error message or redirect to registration page
                $this->call->view('userSide/register');
            }
        }
    }
}


    public function login() {
		$this->form_validation
			->name('password')
				->required()
				->min_length(8)
			->name('email')
				->valid_email();

		if ($this->form_validation->run() == FALSE) {
			$this->call->view('userSide/login');
		} else {
			$email = $this->io->post('email');
			$password = $this->io->post('password');

			// Perform user login
			$user_id = $this->loginUser($email, $password); 

			if ($user_id) {
				
				$this->setLoggedInSession($user_id);
				$_SESSION['email'] = $this->io->post('email');
				$this->call->view('userSide/home');
			} else {
				
				$data['error_message'] = 'Invalid email or password!';
						$data['error_message'] = 'Invalid email or password!';
				$this->call->view('userSide/login', $data);
			}
		}
	}


	private function registerUser($name,  $number, $email, $email_token, $password) {
		$this->Main_model->insert($name,  $number, $email, $email_token, $password);
		return true;
	}

	private function loginUser($email, $password) {
		$user = $this->Main_model->get_user_by_email($email);

		if ($user) {
			if ($password === $user['password']) {
				return $user['id'];
			}
		}

		return false;
	}

	private function setLoggedInSession($user_id) {
		// Set up session for logged-in user
		$session_data = hash('sha256', md5(time() . $user_id));
		$data = array(
			'user_id' => $user_id,
			'browser' => $_SERVER['HTTP_USER_AGENT'],
			'ip' => $_SERVER['REMOTE_ADDR'],
			'session_data' => $session_data
		);
		$this->call->model('Session_model'); // Adjust the model name as needed
		$this->Session_model->insert($data); // Adjust the method name and logic as needed
		$this->session->set_userdata(array('session_data' => $session_data, 'user_id' => $user_id, 'logged_in' => 1));
	}

	public function logout(){
$this->session->unset_userdata(['session_data', 'user_id', 'logged_in']);
$this->session->sess_destroy();
return redirect('login');
	}

	public function adminLogin(){
		$this->form_validation
		->name('password')
			->required()
			->min_length(8)
		->name('name')
		->required();

	if ($this->form_validation->run() == FALSE) {
		$this->call->view('admin/login');
	} else {
		$name = $this->io->post('name');
		$password = $this->io->post('password');

		// Perform user login
		$user_id = $this->Admin_model->loginUser($name, $password);

		if ($user_id) {
			// Login successful, set session and redirect to home or dashboard
			$this->adminSession($user_id);
			return redirect('dashboard');
		} else {
			// Login failed, show an error message or redirect to login page
			$data['error_message'] = 'Invalid email or password!';
			$this->call->view('admin/login', $data);
		}
	}
	}

	public function adminLogout(){
		$this->session->unset_userdata(['adminSession_data', 'admin_id', 'adminLogged_in']);
		$this->session->sess_destroy();
		return redirect('adminLogin');
			}


	public function adminSession($user_id) {
		// Set up session for logged-in user
		$session_data = hash('sha256', md5(time() . $user_id));
	
		$this->session->set_userdata(array('adminSession_data' => $session_data, 'admin_id' => $user_id, 'adminLogged_in' => 1));
	}
}
?>