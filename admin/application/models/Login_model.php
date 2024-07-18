<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function validate($username,$password)
    {
        $flag=false;

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('user_type', 'a');
        $result=$this->db->get()->result();

        if(count($result)>0)
        {
            $row=$result[0];
            $sa=array();
            $sa['user_id']=$row->user_id;
            $sa['username']=$username;
            $this->session->set_userdata($sa);
            $flag=true;
        }
        else
            $flag=false;        

        return($flag);
    }


    // public function user_data($user_id){
    //     $this->db->select('*');
    //     $this->db->from('user');
    //     $this->db->where('user_id', $user_id);
    //     $result=$this->db->get()->result();
    //     var_dump($result);
    //     return ($result);
    // }
    
}
