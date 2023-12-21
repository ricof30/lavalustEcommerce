<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Main_model extends Model {

	    
	public function __construct(){
		parent::__construct();
		$this->call->helper('url');
		$this->call->library('session');
		$this->call->library('form_validation');
        $this->call->database();
	}

    public function index(){

    }
    public function getAllUserData(){
        return $this->db->raw("select * from user");
    }
    public function insert($name, $number, $email, $email_token, $password){
        $data=array(
            'name'=>$name,
            'password'=>$password,
            'phone_number'=>$number,
            'email'=>$email,
            'email_token'=>$email_token,
            // 'verification_code'=>$verification,
            // 'is_verified'=>$is_verify,
        );
        $result= $this->db->table('user')->insert($data);
    }

    public function get_user_by_email($email) {
        return $this->db->table('user')->where('email', $email)->get();
    }

	
}
?>