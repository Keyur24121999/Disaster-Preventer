<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DonateDetails extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/DonateDetailsM","ddm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		//$temp2=array("city"=>$this->um->selectAllCity());
		$temp=array(
			"DonateDetails"=>$this->ddm->selectAllDonateDetails()
		);
		/*echo "<pre>";
		print_r($temp);
		echo "</pre>";*/
		$this->load->view("admin/allDonationDetails",$temp);
	}

	public function removeDonateDetails($ddid)
	{
		$data=array(
			"DonateDetailId"=>$ddid
		);
		$this->ddm->deleteDonateDetails($data);
		redirect("admin/DonateDetails");
	}
}
?>