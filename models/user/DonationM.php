<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DonationM extends CI_Model
{
	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();	
	}

	public function selectAllCategory()
	{
		return $this->db->get("tblcategory")->result();	
	}

	public function insertDonationRequest($data)
	{
		return $this->db->insert("tbldonaterequest",$data);
	}

	public function selectDonationRequestByUserId($data)
	{
		return $this->db->select("dr.*,u.*,c.CityName,cat.CategoryName,s.StateName")->from("tbldonaterequest dr")->join("tbluser u","u.UserId=dr.UserId")->join("tblcity c","c.CityId=dr.CityId")->join("tblstate s","s.StateId=c.StateId")->join("tblcategory cat","cat.CategoryId=dr.CategoryId")->where_in("dr.UserId",$data)->get()->result();
	}
}
?>