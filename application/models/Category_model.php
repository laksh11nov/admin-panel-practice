<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
 
        public function read(){

            $this->db->select('*');
            $this->db->from('product_category');
            $result = $this->db->get()->result();
            return ($result);
        }    
    
}
