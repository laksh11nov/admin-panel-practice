
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function index()
	{
		$data = array();
		$data['base_url'] = base_url();
		$data['main_content'] = 'blog/index';
		$this->load->view('common/template', $data);
	}
	public function add()
	{
		$data = array();
		$data['base_url'] = base_url();
		$data['main_content'] = 'blog/add';
		$this->load->view('common/template', $data);
	}
	public function edit()
	{
		$data = array();
		$data['base_url'] = base_url();
		$data['main_content'] = 'blog/edit';
		$this->load->view('common/template', $data);
	}
}
?>




