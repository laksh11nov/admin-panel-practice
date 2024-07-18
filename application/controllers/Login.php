<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $data['base_url'] = base_url();
        $this->load->view('login',$data);
    }

    public function auth(){

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username=$this->input->post('username');
            $password=$this->input->post('password');

            $flag=$this->Login_model->validate($username,$password);

            if($flag==true){
                redirect(base_url().'dashboard');
            }else{
                echo "<script type='text/javascript'>
                      alert('Please Try Again');
                      window.location='" . base_url() . "login';
                  </script>";
            }
        }
    }


    public function logout()
    {
        $sa=array();
        $sa['user_id']='';
        $sa['username']='';
        $this->session->unset_userdata($sa);
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }
    
}
