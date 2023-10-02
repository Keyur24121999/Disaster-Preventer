<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CategoryM","cm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"cats"=>$this->cm->selectAllCategory()
		);
		$this->load->view("admin/AllCategory",$temp);
	}

	public function removeCategory($id)
	{
		$data=array(
			"CategoryId"=>$id
		);
		$this->cm->deleteCategory($data);
		redirect("admin/Category");
	}

	public function loadEditCategory($id)
	{
		$data=array("CategoryId"=>$id);
		$temp=array(
			"catinfo"=>$this->cm->selectCategoryById($data)
		);
		//print_r($temp);
		$this->load->view("admin/updCategory",$temp);
	}

	public function editCategory($id)
	{
		$where=array("CategoryId"=>$id);
		$newdata=array("CategoryName"=>$this->input->post('txtCname'));
		$this->cm->updateCategory($newdata,$where);
		redirect("admin/Category");	
	}

	public function loadAddCat()
	{
		$this->load->view("admin/addCategory");
	}

	public function addCategory()
	{
		$data=array(
			"CategoryName"=>$this->input->post('txtCname')
		);
		$this->cm->insertCategory($data);

		redirect("admin/Category");
	}
}
?>