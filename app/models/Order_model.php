<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Order_model extends Model
{


    public function __construct()
    {
        parent::__construct();
        $this->call->helper('url');
        $this->call->library('session');
        $this->call->database();
    }



 

    public function insert(
        $product_id,
        $product_name,
        $product_image,
        $product_price,
        $product_quantity,
        $total,
        $status,
        $region,
        $province,
        $municipality,
        $barangay,
        $postal_code,
        $street_name,
        $notes,
        $email
      
    ) {           // Data for database insertion
        $data = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_image' => $product_image,
            'product_price' => $product_price,
            'product_quantity' => $product_quantity,
            'total_amount' => $total,
            'status' => $status,
            'region' => $region,
            'province' => $province,
            'municipality' => $municipality,
            'barangay' => $barangay,
            'postal_code' => $postal_code,
            'street_name' => $street_name,
            'notes' => $notes,
            'email' => $email
        );
        // Insert data into the 'product' table
        $result =  $this->db->table('`order`')->insert($data);
        // return $result->rowCount() > 0;
    }

    public function getOrder()
    {
        $email = $this->session->userdata('email');
        
        $data = $this->db->table('`order`')
            ->select('id, product_image, product_name, product_price, product_quantity, total_amount, status, date')
            ->where('email', $email)
            ->get_all();
    
        return $data;
        
    }

    public function getAllOrders(){
        return $this->db->raw("select * from `order`");
    }

    public function updateStatus($productId, $status)
    {
        $data = array(
            'status' => $status,
        );
        $this->db->table('`order`')->where('id', $productId)->update($data);
    }

    public function deleteOrder($id)
    {
        return $this->db->table('`order`')->where('id', $id)->delete();
    }

    public function sales()
    {
       
       return $this->db->table('`order`')
        ->select('MONTH(date) AS order_month, COUNT(*) AS order_count, SUM(total_amount) AS total')
        ->group_by('MONTH(date)')
        ->order_by('order_month')
        ->get_all();
    }

    public function updateData($id, $product_name, $product_image, $product_price, $product_quantity, $total, $status){

        $data = array(
            'product_name' => $product_name,
            'product_image' => $product_image,
            'product_price' => $product_price,
            'product_quantity' => $product_quantity,
            'total_amount' => $total,
            'status' => $status,

        );
        $result = $this->db->table('act')->where('id', $id)->update($data);       
    }



   
}
?>