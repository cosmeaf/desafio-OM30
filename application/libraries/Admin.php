<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin {

	function show($view, $data=array()){

		$CI = & get_instance();

			// Load header
		$CI->load->view('admin/header',$data);

			// Load content
		$CI->load->view($view,$data);

			// Load footer
		$CI->load->view('admin/footer',$data);

			// Scripts
		$CI->load->view('admin/scripts',$data);
	}

	

}

/* End of file Admin.php */
/* Location: ./application/libraries/Admin.php */
