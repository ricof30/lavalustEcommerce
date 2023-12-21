<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Payment_model extends Model {

	    
	public function __construct(){
		parent::__construct();
		$this->call->helper('url');
		$this->call->library('session');
        $this->call->database();
	}

   
    public function getPayment(){
        return $this->db->raw("select * from payment");
    }
   
    public function insert( $paypal_order_id, $create_time, $payer_id, $payer_email, $payer_given_name, $payer_surname, $status, $update_time, $address_country_code) {
        $data = array(
            'paypal_order_id' => $paypal_order_id,
            'create_time' => $create_time,
            'payer_id' => $payer_id,
            'payer_email' => $payer_email,
            'payer_given_name' => $payer_given_name,
            'payer_surname' => $payer_surname,
            'status' => $status,
            'update_time' => $update_time,
            'address_country_code' => $address_country_code,
        );
    
       $result =  $this->db->table('payment')->insert($data);  
    }
    

    public function get_user_by_email($email) {
        return $this->db->table('user')->where('email', $email)->get();
    }

	
}
?>