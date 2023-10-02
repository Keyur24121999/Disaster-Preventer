<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employees extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/EmployeesM","em");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		//$temp2=array("city"=>$this->um->selectAllCity());
		$temp=array(
			"employees"=>$this->em->selectAllEmployees()
		);
		/*echo "<pre>";
		print_r($temp);
		echo "</pre>";*/
		$this->load->view("admin/allEmployees",$temp);
	}

	public function removeEmployees($id)
	{
		$data=array(
			"EmployeeId"=>$id
		);
		$this->em->deleteEmployee($data);
		redirect("admin/Employees");
	}

	public function loadAddEmp()
	{
		$temp=array(
			"City"=>$this->em->selectAllCity(),
			"Cat"=>$this->em->selectAllCategory()
		);
		$this->load->view("admin/addEmployees",$temp);
	}

	public function addEmp()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"EmployeeName"=>$this->input->post("txtEname"),
			"UserName"=>$this->input->post("txtUname"),
			"Password"=>$this->input->post("txtpass"),
			"Email"=>$this->input->post("txtEmail"),
			"Gender"=>$this->input->post("txtGender"),
			"CityId"=>$this->input->post("txtCity"),
			"CoverImage"=>$img,
			"Contact"=>$this->input->post("txtContact"),
			"CategoryId"=>$this->input->post("txtCategory"),
			"Address"=>$this->input->post("txtAddress"),
			"DOB"=>$this->input->post("DOB"),
		);
		$this->em->insertEmployee($data);
		redirect("admin/Employees");
	}
}
?>