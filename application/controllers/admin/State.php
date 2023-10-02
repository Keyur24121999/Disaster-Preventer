<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class State extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/StateM","sm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"State"=>$this->sm->selectAllState()
		);
		$this->load->view("admin/AllState",$temp);
	}

	public function removeState($sid)
	{
		$data=array(
			"StateId"=>$sid
		);
		$this->sm->deleteState($data);
		redirect("admin/State");
	}

	public function loadEditState($sid)
	{
		$data=array("StateId"=>$sid);
		$temp=array(
			"stateinfo"=>$this->sm->selectStateById($data)
		);
		//print_r($temp);
		$this->load->view("admin/updState",$temp);
	}

	public function editState($sid)
	{
		$where=array("StateId"=>$sid);
		$newdata=array("StateName"=>$this->input->post('txtSname'));
		$this->sm->updateState($newdata,$where);
		redirect("admin/State");	
	}

	public function loadAddState()
	{
		$this->load->view("admin/addState");
	}

	public function addState()
	{
		$data=array(
			"StateName"=>$this->input->post('txtSname')
		);
		//print_r($data);
		$this->sm->insertState($data);
		redirect("admin/State");
	}
}
?>