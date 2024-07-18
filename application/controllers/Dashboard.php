
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data = array();
		$data['base_url'] = base_url();
		$data['main_content'] = 'dashboard';
		$this->load->view('common/template', $data);
	}
}
?>




