<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpNewsM extends CI_Model
{
	public function selectAllNews()
	{
		return $this->db->order_by("NewsId","asc")->select("n.*,c.*,cat.*,s.*")->from("tblnews n")->join("tblcity c","c.CityId=n.CityId")->join("tblcategory cat","cat.CategoryId=n.CategoryId")->join("tblstate s","s.StateId=c.StateId")->get()->result();
	}

	public function selectNewsImagesByNewsId($data)
	{
		return $this->db->select("ni.*,n.Topic")->from("tblnewsimages ni")->join("tblnews n","n.NewsId=ni.NewsId")->where_in("ni.NewsId",$data)->get()->result();
	}

	public function deleteNewsImageByNewsImageId($data)
	{
		return $this->db->where($data)->delete("tblnewsimages");
	}

	public function updateNewsImage($newdata,$where)
	{
		return $this->db->where($where)->update("tblnewsimages",$newdata);
	}

	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();
	}

	public function selectAllCategory()
	{
		return $this->db->get("tblcategory")->result();
	}

	public function insertNews($data)
	{
		return $this->db->insert("tblnews",$data);
	}

	public function selectNewsByNewsId($data)
	{
		return $this->db->select("n.*,cat.*")->from("tblnews n")->join("tblcategory cat","cat.CategoryId=n.CategoryId")->where_in("n.NewsId",$data)->get()->result();
	}

	public function selectNewsByTitle($data)
	{
		return $this->db->select("n.*,cat.*")->from("tblnews n")->join("tblcategory cat","cat.CategoryId=n.CategoryId")->where_in("n.Topic",$data)->get()->result();
	}

	public function updateNews($newdata,$where)
	{
		return $this->db->where($where)->update("tblnews",$newdata);
	}

	public function insertNewsImages($data)
	{
		return $this->db->insert("tblnewsimages",$data);
	}

	public function selectNewsByCategoryId($data)
	{
		return $this->db->select("n.*,c.*,cat.*")->from("tblnews n")->join("tblcity c","c.CityId=n.CityId")->join("tblcategory cat","cat.CategoryId=n.CategoryId")->where_in("n.CategoryId",$data)->get()->result();
	}
}
?>