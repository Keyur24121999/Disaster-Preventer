<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/ProfileM","pm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$data=array(
			"AdminId"=>$_SESSION['aid']
		);
		$temp=array(
			"Admin"=>$this->pm->selectAdminById($data)
		);
		//print_r($temp);
		$this->load->view("admin/MyProfile",$temp);
	}

	public function loadEditProfile($aid)
	{
		$data=array(
			"AdminId"=>$aid
		);
		$temp=array(
			"Admin"=>$this->pm->selectAdminById($data)
		);
		$this->load->view("admin/EditProfile",$temp);
	}

	public function editBasicProfile($aid)
	{
		$where=array(
			"AdminId"=>$aid
		);
		if ($aid==$_SESSION['aid']) 
		{
			$newdata=array(
				"Username"=>$this->input->post('txtAname'),
				"Email"=>$this->input->post('txtEmail'),
				"ContactNo"=>$this->input->post('txtContact')
			);
			$this->pm->updateAdmin($newdata,$where);
			redirect("admin/Profile");
		}
		else
		{
			redirect("admin/Demo");
		}
		//print_r($newdata);
	}

	public function editPassword($aid)
	{
		$where=array(
			"AdminId"=>$aid
		);
		$data=array(
			"AdminId"=>$_SESSION['aid']
		);
		$admin=$this->pm->selectAdminById($where);
		$oldPassword=$this->input->post('txtOldPwd');
		$newPassword=$this->input->post('txtNewPwd');
		$conPassword=$this->input->post('txtConPwd');

		if ($admin[0]->Password==$oldPassword) 
		{
			if ($newPassword==$conPassword) 
			{
				$newdata=array(
					"Password"=>$newPassword
				);
				$temp=array(
					"Msg"=>"Password Changed Successfully",
					"Admin"=>$this->pm->selectAdminById($data)
				);
				$this->pm->updateAdmin($newdata,$where);
				$this->load->view("admin/MyProfile",$temp);
			}
			else
			{
				$newdata=array(
					"Err"=>"New Password & Confirm Password Doesnot Match",
					"Admin"=>$this->pm->selectAdminById($where),
					"AdminId"=>$aid
				);
				$this->load->view("admin/EditProfile",$newdata);
			}
		}
		else
		{
			$newdata=array(
				"Msg"=>"Old Password Doesnot Match",
				"Admin"=>$this->pm->selectAdminById($where),
				"AdminId"=>$aid
			);
			$this->load->view("admin/EditProfile",$newdata);
		}
	}

	public function editImage($aid)
	{
		$where=array(
			"AdminId"=>$aid
		);
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/wamp/www/CommunityProject/resources/shared/images/".$img) or die("cannot upload image");
		if ($img=="") 
		{
			redirect("admin/Profile");
		}
		else
		{
			$newdata=array(
				"ProfilePic"=>$img
			);
			$this->pm->updateAdmin($newdata,$where);
			$_SESSION['propic']=$img;
			redirect("admin/Profile");
		}
	}
}
?>