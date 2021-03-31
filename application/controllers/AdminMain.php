<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class AdminMain extends CI_Controller 
{
	public function index()
	{
		$data['title']="Dashboard";
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/footer_admin',$data);
	}
}

?>