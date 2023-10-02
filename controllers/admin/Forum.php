<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forum extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/ForumM","fm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"forum"=>$this->fm->selectAllForum()
		);
		$this->load->view("admin/AllForum",$temp);
	}

	public function removeForum($id)
	{
		$data=array(
			"ForumId"=>$id
		);
		$this->fm->deleteForum($data);
		$this->fm->deleteComments($data);
		$this->fm->deleteLikes($data);
		redirect("admin/Forum");
	}

	public function loadCommunity($fid)
	{
		$data=array("ForumId"=>$fid);
		$temp=array(
			"Community"=>$this->fm->selectCommunity($data)
		);

		$this->load->view("admin/ViewCommunityByForum",$temp);
	}

	public function loadComments($fid)
	{
		$data=array("ForumId"=>$fid);
		$temp=array(
			"Comments"=>$this->fm->selectComments($data)
		);

		$this->load->view("admin/ViewCommentsByForum",$temp);
	}

	public function loadLikes($fid)
	{
		$data=array("ForumId"=>$fid);
		$temp=array(
			"Likes"=>$this->fm->selectLikes($data)
		);

		$this->load->view("admin/ViewLikeByForum",$temp);
	}	
}
?>