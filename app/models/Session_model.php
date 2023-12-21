<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Session_model extends Model {

	    
	public function __construct(){
		parent::__construct();
		$this->call->helper('url');
		$this->call->library('session');
		$this->call->library('form_validation');
        $this->call->database();
	}

  
    public function insert($data) {        
        
      return $this->db->table('sessions')->insert($data);
        
    }

    
    
    
 
   

	
}
?>