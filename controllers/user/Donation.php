<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Donation extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/DonationM","dm");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("user/User");
		}
		$data=array("UserId"=>$_SESSION['uid']);
		$temp=array(
			"DonationRequest"=>$this->dm->selectDonationRequestByUserId($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/DonationDetails",$temp);
	}

	public function loadAddDonationRequest()
	{
		$temp=array(
			"cities"=>$this->dm->selectAllCity(),
			"cats"=>$this->dm->selectAllCategory()
		);
		$this->load->view("user/DonationRequest",$temp);
	}

	public function loadDonationRequestByUserId()
	{
		$data=array("UserId"=>$_SESSION['uid']);
		$temp=array(
			"DonationRequest"=>$this->dm->selectDonationRequestByUserId($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/DonationDetails",$temp);
	}

	public function addDonationRequest()
	{
		// $img=$_FILES['fup']['name'];
		// copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"UserId"=>$_SESSION['uid'],
			"Description"=>$this->input->post('txtDesc'),
			"CategoryId"=>$this->input->post('txtCategory'),
			"CityId"=>$this->input->post('txtCity')
		);
		$this->dm->insertDonationRequest($data);
		//print_r($d2);
		//$this->dm->insertCommunityCurator($d2);
		//$this->dm->insertCommunityMember($d2);
		
		redirect("user/Donation/");
	}

}
?>