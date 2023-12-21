<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product_model extends Model {

	    
	public function __construct(){
		parent::__construct();
		$this->call->helper('url');
		$this->call->library('session');
		$this->call->library('form_validation');
        $this->call->library('upload');
        $this->call->database();
	}

 
    public function insert($name, $price, $description, $stocks, $image_path) {        
                $data = array(
                    'name'        => $name,
                    'price'       => $price,
                    'description' => $description,
                    'stocks'      => $stocks,
                    'image'       => $image_path,  
                );
                // Insert data into the 'product' table
                $result = $this->db->table('product')->insert($data);
    }
    
    public function getProduct(){
        return $this->db->raw("select * from product");
    }

    public function getProductById($id){
        return $this->db->table('product')->where('id', $id)->get();
    }
    
    public function getProductImage($id){
        return $this->db->table('product')->select('image')->where('id', $id)->get();
    }
    public function updateProduct($id, $name, $price, $description, $stocks, $image_path){

        $data = array(
            'name'        => $name,
            'price'       => $price,
            'description' => $description,
            'stocks'      => $stocks,
            'image'       => $image_path
        );
        // $result = $this->db->table('act')->update($data)->where('id', $id)->exec();
        $result = $this->db->table('product')->where('id', $id)->update($data);
    }
    
    
 
   

	
}
?>