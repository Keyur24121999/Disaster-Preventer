<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/UserM","um");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		//$temp2=array("city"=>$this->um->selectAllCity());
		$temp=array(
			"users"=>$this->um->selectAllUser()
		);
		/*echo "<pre>";
		print_r($temp);
		echo "</pre>";*/
		$this->load->view("admin/allUser",$temp);
	}

	public function removeUser($id)
	{
		$data=array(
			"UserId"=>$id
		);
		$this->um->deleteUser($data);
		redirect("admin/User");
	}
}
?>