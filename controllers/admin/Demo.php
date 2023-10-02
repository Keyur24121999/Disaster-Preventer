<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Demo extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
	}

	public function index()
	{
		$this->load->view("admin/Home");
	}
}
?>