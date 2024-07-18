<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function base_url2()
{
	$ci=& get_instance();

	$url=$ci->config->item('base_url');

	return($url);
}

function user_id()
{
	$ci=& get_instance();	

	$user_id=$ci->session->userdata('user_id');

	return($user_id);
}
function username()
{
	$ci=& get_instance();	

	$username=$ci->session->userdata('username');

	return($username);
}
function is_login()
{
	$ci=& get_instance();	

	if($ci->session->userdata('username'))
		return(true);
	else
		return(false);
}
?>