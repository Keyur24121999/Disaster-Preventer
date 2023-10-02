<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class City extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CityM","cm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"city"=>$this->cm->selectAllCity()
		);
		$this->load->view("admin/allCity",$temp);
	}

	public function removeCity($cid)
	{
		$data=array(
			"CityId"=>$cid
		);
		$this->cm->deleteCity($data);
		redirect("admin/City");
	}

	public function loadEditCity($cid)
	{
		$data=array("CityId"=>$cid);
		$temp=array(
			"cityinfo"=>$this->cm->selectCityById($data)
		);
		//print_r($temp);
		$this->load->view("admin/updCity",$temp);
	}

	public function editCity($cid)
	{
		$where=array("CityId"=>$cid);
		$newdata=array("CityName"=>$this->input->post('txtCname'));
		$this->cm->updateCity($newdata,$where);
		redirect("admin/City");	
	}

	public function loadAddCity()
	{
		$temp=array(
			"State"=>$this->cm->selectAllState()
		);
		$this->load->view("admin/addCity",$temp);
	}

	public function addCity()
	{
		$a=$this->input->post('txtCity');
		if ($a=="-1") 
		{
			$temp=array(
				"State"=>$this->cm->selectAllState(),
				"Msg"=>"Select State And Insert"
			);
			$this->load->view("admin/addCity",$temp);
		}
		else
		{
			$data=array(
				"CityName"=>$this->input->post('txtCname'),
				"StateId"=>$this->input->post('txtCity')
			);
			$this->cm->insertCity($data);
			redirect("admin/City");
		}
	}
}
?>