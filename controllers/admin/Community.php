<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Community extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CommunityM","cm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}

		$temp=array(
			"comm"=>$this->cm->selectAllCommunity()
		);

		// foreach ($comm as $c) 
		// {
		// 	if ($c->Status==0) 
		// 	{
				
		// 	}
		// }

		$this->load->view("admin/allCommunity",$temp);
	}

	public function removeCommunity($id)
	{
		$data=array(
			"CommunityId"=>$id
		);
		$this->cm->deleteCommunity($data);
		//$this->cm->deleteCommunityMemberByCommunityId($data);
		redirect("admin/Community");
	}
}
?>