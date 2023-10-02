<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DonationRequest extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/DonationRequestM","drm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		//$temp2=array("city"=>$this->um->selectAllCity());
		$temp=array(
			"DonateRequest"=>$this->drm->selectAllDonateRequest()
		);
		/*echo "<pre>";
		print_r($temp);
		echo "</pre>";*/
		$this->load->view("admin/allDonationRequest",$temp);
	}

	public function removeDonateRequest($drid)
	{
		$data=array(
			"DonateRequestId"=>$drid
		);
		$this->drm->deleteDonateRequest($data);
		redirect("admin/DonationRequest");
	}
}
?>