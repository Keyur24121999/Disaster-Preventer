<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CommunityMember extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CommunityMemberM","cm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"commem"=>$this->cm->selectAllCommunityMember()
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("admin/allCommunityMember",$temp);
	}

	public function removeCommunityMember($cmid)
	{
		$data=array(
			"CommunityMemberId"=>$cmid
		);
		$this->cm->deleteCommunityMember($data);
		//$this->cm->deleteCommunityMemberByCommunityId($data);
		redirect("admin/CommunityMember");
	}

	public function BlockMember($cmid)
	{
		$where=array(
			"CommunityMemberId"=>$cmid
		);
		$newdata=array("Status"=>"1");
		$this->cm->updateCommunityMember($newdata,$where);
		redirect("admin/CommunityMember");
	}

	public function UnblockMember($cmid)
	{
		$where=array(
			"CommunityMemberId"=>$cmid
		);
		$newdata=array("Status"=>"0");
		$this->cm->updateCommunityMember($newdata,$where);
		redirect("admin/CommunityMember");
	}
}
?>