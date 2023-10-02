<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpDemoM extends CI_Model
{
	public function selectAllNews()
	{
		return $this->db->order_by("NewsId","asc")->select("n.*,c.CityName,s.StateName,cat.*")->from("tblnews n")->join("tblcity c","c.CityId=n.CityId")->join("tblstate s","s.StateId=c.StateId")->join("tblcategory cat","cat.CategoryId=n.CategoryId")->get()->result();
	}

	public function selectAllCommunity()
	{
		return $this->db->select("c.*,e.*")->from("tblcommunity c")->join("tblemployee e","e.EmployeeId=c.EmployeeId")->get()->result();
	}

	public function selectAllUser()
	{
		return $this->db->get("tbluser")->result();
	}

	public function selectAllCommunities()
	{
		return $this->db->get("tblcommunity")->result();
	}

	// public function selectAllNews()
	// {
	// 	return $this->db->get("tblnews")->result();
	// }

	public function selectAllForums()
	{
		return $this->db->select("f.*,c.Title as ttl,c.CoverPic,c.Description as desc,c.CreatedDt as dt,u.Username,u.ProfileImage")->from("tblforum f")->join("tblcommunity c","c.CommunityId=f.CommunityId")->join("tbluser u","u.UserId=f.UserId")->get()->result();
	}

	public function selectAllEmployee()
	{
		return $this->db->select("e.*,c.CityName,s.StateName,cat.*")->from("tblemployee e")->join("tblcity c","c.CityId=e.CityId")->join("tblcategory cat","cat.CategoryId=e.CategoryId")->join("tblstate s","s.StateId=c.StateId")->get()->result();
	}

	public function deleteUser($data)
	{
		return $this->db->delete("tbluser",$data);
	}
}
?>