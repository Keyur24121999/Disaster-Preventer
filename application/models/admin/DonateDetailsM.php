<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DonateDetailsM extends CI_Model
{
	public function selectAllDonateDetails()
	{
		return $this->db->order_by("DonateDetailId","asc")->select("dd.*,p.*,c.CityName,cat.*,u.Username")->from("tbldonatedetails dd")->join("tblpayment p","p.ORDERID=dd.ORDERID")->join("tblcity c","c.CityId=p.CityId")->join("tblcategory cat","cat.CategoryId=p.CategoryId")->join("tbluser u","u.UserId=p.UserId")->get()->result();
	}

	public function deleteDonateDetails($data)
	{
		return $this->db->delete("tbldonatedetails",$data);
	}
}
?>