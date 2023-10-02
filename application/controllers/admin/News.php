<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/NewsM","nm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"News"=>$this->nm->selectAllNews()
		);
		$this->load->view("admin/allNews",$temp);
	}

	public function loadNewsImagesByNewsId($nid)
	{
		$data=array("NewsId"=>$nid);
		$temp=array(
			"NewsImages"=>$this->nm->selectNewsImagesByNewsId($data)
		);
		$this->load->view("admin/NewsImages",$temp);
	}

	public function removeImage($nid,$id)
	{
		$data=array("NewsImageId"=>$nid);
		$this->nm->deleteNewsImageByNewsImageId($data);
		redirect("admin/News/loadNewsImagesByNewsId/$id");
	}

	public function loadEditImage($nid,$id)
	{
		$data=array(
			"NewsImageId"=>$nid,
			"NewsId"=>$id
		);
		$this->load->view("admin/updNewsImage",$data);
	}

	public function editNewsImage($nid,$id)
	{
		$where=array("NewsImageId",$nid);
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		$newdata=array(
				"ImageURL"=>$img
			);
		// print_r($where);
		// print_r($newdata);
		$this->nm->updateNewsImage($newdata,$where);
		redirect("admin/News/loadNewsImagesByNewsId/$id");
	}

	public function loadAddNews()
	{
		$temp=array(
			"City"=>$this->nm->selectAllCity(),
			"Cat"=>$this->nm->selectAllCategory()
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("admin/addNews",$temp);
	}

	public function addNews()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"Topic"=>$this->input->post('txtTopic'),
			"Description"=>$this->input->post('txtDes'),
			"CityId"=>$this->input->post('txtCity'),
			"CategoryId"=>$this->input->post('txtCategory'),
			"CoverImage"=>$img
		);
		$this->nm->insertNews($data);
		redirect("admin/News");
	}

	public function loadeditNews($id)
	{
		$data=array("NewsId"=>$id);
		$temp=array(
			"News"=>$this->nm->selectNewsByNewsId($data),
			"City"=>$this->nm->selectAllCity(),
			"Cat"=>$this->nm->selectAllCategory(),
			"NewsId"=>$id
		);
		$this->load->view("admin/updNews",$temp);
	}

	public function editNews($id)
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		$where=array("NewsId"=>$id);
		$newdata=array(
			"Topic"=>$this->input->post('txtTopic'),
			"Description"=>$this->input->post('txtDes'),
			"CityId"=>$this->input->post('txtCity'),
			"CategoryId"=>$this->input->post('txtCategory'),
			"CoverImage"=>$img
		);
		// print_r($where);
		// print_r($newdata);
		$this->nm->updateNews($newdata,$where);
		redirect("admin/News");
	}

	public function loadaddImages($id)
	{
		$data=array(
			"NewsId"=>$id
		);
		$this->load->view("admin/addNewsImages",$data);
	}

	public function addNewsImages($id)
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		$data=array("NewsId"=>$id);
		$temp=array(
			"ImageURL"=>$img,
			"NewsId"=>$id
		);
		$this->nm->insertNewsImages($temp);
		redirect("admin/News");
	}
}
?>