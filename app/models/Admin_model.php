<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin_model extends Model {

	    
	public function __construct(){
		parent::__construct();
		$this->call->helper('url');
		$this->call->library('session');
        $this->call->database();
	}

	public function get_user_by_email($email) {
        return $this->db->table('user')->where('email', $email)->get();
    }

    public function getAdmin($name) {
      
        return $this->db->table('admin')->where('name', $name)->get();
    }

    public function loginUser($name, $password) {
		// Perform user login logic (e.g., check username/password against database)
		// Return user_id on success, false on failure
		// Example:
        $this->call->model('Admin_model');
		$user = $this->Admin_model->getAdmin($name);

		if ($user) {
			if ($password === $user['password']) {
				return $user['id'];
			}
		}

		return false;
	}


 






	
}
?>