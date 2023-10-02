<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/NewsM","nm");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("user/User");
		}
		$temp=array(
			"News"=>$this->nm->selectAllNews(),
			"Categories"=>$this->nm->selectAllCategory()
		);
		$this->load->view("user/allNews",$temp);
	}

	public function loadNewsById($nid)
	{
		$data=array("NewsId"=>$nid);
		$temp=array(
			"News"=>$this->nm->selectNewsByNewsId($data),
			"NewsImages"=>$this->nm->selectNewsImagesByNewsId($data)
		);
		$this->load->view("user/NewsMoreInfo",$temp);
	}

	public function loadNewsByTitle()
	{
		$data=$this->input->post("txtTopic");
		$temp=array(
			"News"=>$this->nm->selectNewsByTitle($data),
			//"NewsImages"=>$this->nm->selectNewsImagesByNewsId($data),
			"Categories"=>$this->nm->selectAllCategory()
		);
		$this->load->view("user/NewsByTitle",$temp);
	}

	public function loadNewsImagesByNewsId($nid)
	{
		$data=array("NewsId"=>$nid);
		$temp=array(
			"NewsImages"=>$this->nm->selectNewsImagesByNewsId($data)
		);
		$this->load->view("user/NewsImages",$temp);
	}

	public function removeImage($nid,$id)
	{
		$data=array("NewsImageId"=>$nid);
		$this->nm->deleteNewsImageByNewsImageId($data);
		redirect("user/News/loadNewsImagesByNewsId/$id");
	}

	public function loadEditImage($nid,$id)
	{
		$data=array(
			"NewsImageId"=>$nid,
			"NewsId"=>$id
		);
		$this->load->view("user/updNewsImage",$data);
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
		redirect("user/News/loadNewsImagesByNewsId/$id");
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
		$this->load->view("user/addNews",$temp);
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
		redirect("user/News");
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
		$this->load->view("user/updNews",$temp);
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
		redirect("user/News");
	}

	public function loadaddImages($id)
	{
		$data=array(
			"NewsId"=>$id
		);
		$this->load->view("user/addNewsImages",$data);
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
		redirect("user/News");
	}

	public function loadNewsByCategoryId($cid)
	{
		$data=array(
			"CategoryId"=>$cid
		);
		$temp=array(
			"NewsCat"=>$this->nm->selectNewsByCategoryId($data),
			"Categories"=>$this->nm->selectAllCategory()
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/NewsbyCategory",$temp);

	}
}
?>