<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/ProfileM","pm");
	}

	public function index($uid)
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("user/User");
		}
		$data=array(
			"UserId"=>$uid
		);
		$temp=array(
			"User"=>$this->pm->selectUserById($data),
			//"Community"=>$this->pm->selectCommunityByUserId($data),
			"City"=>$this->pm->selectAllCity(),
			//"Members"=>$this->pm->selectCommunityMemberByUserId($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/MyProfile",$temp);
	}

	public function loadEmp($eid)
	{
		$data=array(
			"EmployeeId"=>$eid
		);
		$temp=array(
			"Employee"=>$this->pm->selectEmployeeById($data),
			//"Community"=>$this->pm->selectCommunityByUserId($data),
			"City"=>$this->pm->selectAllCity(),
			//"Members"=>$this->pm->selectCommunityMemberByUserId($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/EmpProfile",$temp);
	}

	public function loadEmpEditProfile($eid)
	{
		$data=array(
			"EmployeeId"=>$eid
		);
		$temp=array(
			"Employee"=>$this->pm->selectEmployeeById($data),
			//"Community"=>$this->pm->selectCommunityByUserId($data),
			"City"=>$this->pm->selectAllCity(),
			//"Members"=>$this->pm->selectCommunityMemberByUserId($data)
		);
		$this->load->view("user/EmpEditProfile",$temp);
	}

	public function loadEditProfile($uid)
	{
		$data=array(
			"UserId"=>$uid
		);
		$temp=array(
			"User"=>$this->pm->selectUserById($data),
			//"Community"=>$this->pm->selectCommunityByUserId($data),
			"City"=>$this->pm->selectAllCity(),
			//"Members"=>$this->pm->selectCommunityMemberByUserId($data)
		);
		$this->load->view("user/EditProfile",$temp);
	}

	public function EmpeditInfo($eid)
	{
		$where=array(
			"EmployeeId"=>$eid
		);
		$newdata=array(
			"UserName"=>$this->input->post('txtUname'),
			"Email"=>$this->input->post('txtEmail'),
			"Gender"=>$this->input->post('txtGender'),
			"DOB"=>$this->input->post('BirthDate'),
			"CityId"=>$this->input->post('txtCity'),
			"Contact"=>$this->input->post('txtContact')
		);
		// echo "<pre>";
		// print_r($newdata);
		// echo "</pre>";
		$this->pm->updateEmployee($newdata,$where);
		redirect("user/Profile/loadEmp/$eid");
	}

	public function editInfo($uid)
	{
		$where=array(
			"UserId"=>$uid
		);
		$newdata=array(
			"Username"=>$this->input->post('txtUname'),
			"Email"=>$this->input->post('txtEmail'),
			"Gender"=>$this->input->post('txtGender'),
			"DOB"=>$this->input->post('BirthDate'),
			"CityId"=>$this->input->post('txtCity'),
			"MobileNo"=>$this->input->post('txtMobile')
		);
		// echo "<pre>";
		// print_r($newdata);
		// echo "</pre>";
		$this->pm->updateUser($newdata,$where);
		redirect("user/Profile/index/$uid");
	}

	public function EmpeditPassword($eid)
	{
		$where=array(
			"EmployeeId"=>$eid
		);
		$Employee=$this->pm->selectEmployeeById($where);
		$oldpass=$this->input->post('txtoldpassword');
		$newPwd=$this->input->post('txtNewPwd');
		$conPwd=$this->input->post('txtConPwd');
		if ($oldpass==$Employee[0]->Password) 
		{
			if ($newPwd==$conPwd) 
			{
				$newdata=array(
					"Password"=>$this->input->post('txtNewPwd')
				);
				$temp=array(
					"Employee"=>$this->pm->selectEmployeeById($where),
					"City"=>$this->pm->selectAllCity(),
					"EmployeeId"=>$eid,
					"Suc"=>"Password Changed Successfully"
				);
				// echo "<pre>";
				// print_r($newdata);
				// print_r($temp);
				// echo "</pre>";
				$this->pm->updateEmployee($newdata,$where);
				$this->load->view("user/EmpProfile",$temp);
			}
			else
			{
				$newdata=array(
					"Err"=>"New Password & Confirm Password Doesn't Match",
					"Employee"=>$this->pm->selectEmployeeById($where),
					"City"=>$this->pm->selectAllCity(),
					"EmployeeId"=>$eid
				);
				// echo "<pre>";
				// print_r($newdata);
				// echo "</pre>";
				$this->load->view("user/EmpEditProfile",$newdata);
			}
			
		}
		else
		{
			$newdata=array(
				"Msg"=>"Old Password is Incorrect",
				"Employee"=>$this->pm->selectEmployeeById($where),
				"City"=>$this->pm->selectAllCity(),
				"EmployeeId"=>$eid
			);
			// echo "<pre>";
			// print_r($newdata);
			// echo "</pre>";
			$this->load->view("user/EmpEditProfile",$newdata);
		}
		
		// echo "<pre>";
		// print_r($newdata);
		// echo "</pre>";
	}

	public function editPassword($uid)
	{
		$where=array(
			"UserId"=>$uid
		);
		$User=$this->pm->selectUserById($where);
		$oldpass=$this->input->post('txtoldpassword');
		$newPwd=$this->input->post('txtNewPwd');
		$conPwd=$this->input->post('txtConPwd');
		if ($oldpass==$User[0]->Password) 
		{
			if ($newPwd==$conPwd) 
			{
				$newdata=array(
					"Password"=>$this->input->post('txtNewPwd')
				);
				$temp=array(
					"User"=>$this->pm->selectUserById($where),
					"City"=>$this->pm->selectAllCity(),
					"UserId"=>$uid,
					"Suc"=>"Password Changed Successfully"
				);
				// echo "<pre>";
				// print_r($newdata);
				// print_r($temp);
				// echo "</pre>";
				$this->pm->updateUser($newdata,$where);
				$this->load->view("user/MyProfile",$temp);
			}
			else
			{
				$newdata=array(
					"Err"=>"New Password & Confirm Password Doesn't Match",
					"User"=>$this->pm->selectUserById($where),
					"City"=>$this->pm->selectAllCity(),
					"UserId"=>$uid
				);
				// echo "<pre>";
				// print_r($newdata);
				// echo "</pre>";
				$this->load->view("user/EditProfile",$newdata);
			}
			
		}
		else
		{
			$newdata=array(
				"Msg"=>"Old Password is Incorrect",
				"User"=>$this->pm->selectUserById($where),
				"City"=>$this->pm->selectAllCity(),
				"UserId"=>$uid
			);
			// echo "<pre>";
			// print_r($newdata);
			// echo "</pre>";
			$this->load->view("user/EditProfile",$newdata);
		}
		
		// echo "<pre>";
		// print_r($newdata);
		// echo "</pre>";
	}

	public function EmpeditImage($eid)
	{
		$where=array(
			"EmployeeId"=>$eid
		);
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		if ($img=="") 
		{
			redirect("user/Profile/loadEmp/$eid");
		}
		else
		{
			$newdata=array(
				"CoverImage"=>$img
			);
			$this->pm->updateEmployee($newdata,$where);
			$_SESSION['coverimg']=$img;
			redirect("user/Profile/loadEmp/$eid");
		}
	}

	public function editImage($uid)
	{
		$where=array(
			"UserId"=>$uid
		);
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		if ($img=="") 
		{
			redirect("user/Profile/index/$uid");
		}
		else
		{
			$newdata=array(
				"ProfileImage"=>$img
			);
			$this->pm->updateUser($newdata,$where);
			$_SESSION['propic']=$img;
			redirect("user/Profile/index/$uid");
		}
	}
}
?>