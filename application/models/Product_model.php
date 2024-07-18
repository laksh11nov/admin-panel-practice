<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {


        // for single product read
        public function get_product($product_id)
        {
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('product_id', $product_id);
            $result = $this->db->get()->result();
            return ($result);

        }

        // create product
       public function add($data){

            $this->db->insert('product',$data);
            if ($this->db->affected_rows() >= 0) {
                return true; 
            } else {
                return false; 
             }

       } 

       // edit product
       function edit($product_id, $data)
    {
        $this->db->where('product_id', $product_id);
        $this->db->update('product', $data);
        if ($this->db->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }

        // real all products
        public function read(){

            $this->db->select('*');
            $this->db->from('product_category');
            $this->db->join('product', 'product_category.product_category_slug = product.product_category_slug', 'inner');
            $result = $this->db->get()->result();
            return ($result);
        }

        // Delete Product // delete
        public function delete($id){

            $this->db->where('product_id',$id);
            $this->db->delete('product');
            if ($this->db->affected_rows() >= 0) {
                return true; 
            } else {
                return false; 
            }
        }
    
    
}
