<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Cart_model extends Model {

	    
	public function __construct(){
		parent::__construct();
		$this->call->helper('url');
		$this->call->library('session');
        $this->call->database();
	}

    public function index(){

    }
    public function delete($id)
    { 
        $this->db->table('cart')->where('id', $id)->delete();    
    }

    public function clearCart()
    { 
        return $this->db->raw("DELETE from cart");
        
    }


    public function getCart(){
        return $this->db->raw("select * from cart");
    }
    
    public function insert($productId, $name, $price, $image, $email) {      
        $data = array(
            'product_id'  => $productId,
            'name'        => $name,
            'price'       => $price,
            'email'       => $email,
            'image'       => $image // Save the image path in the database
        );
        // Insert data into the 'product' table
        $result = $this->db->table('cart')->insert($data);
}

public function updateQuantity($productId, $quantity) {
    
    $data = array(
        'quantity' => $quantity,
    );
    $this->db->table('cart')->where('product_id', $productId)->update($data);
}
public function getProductById($id){
   
    return $this->db->table('cart')->where('id', $id)->get();
}


public function totalCart() {
    return $this->db->table('cart')->select_count('*','total_products')->get();
}






	
}
?>