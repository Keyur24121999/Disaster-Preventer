<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DonationRequestM extends CI_Model
{
	public function selectAllDonateRequest()
	{
		return $this->db->order_by("DonateRequestId","asc")->select("dr.*,cat.*,c.CityName,s.StateName,u.*")->from("tbldonaterequest dr")->join("tblcity c","c.CityId=dr.CityId")->join("tblstate s","s.StateId=c.StateId")->join("tblcategory cat","cat.CategoryId=dr.CategoryId")->join("tbluser u","u.UserId=dr.UserId")->get()->result();
	}

	public function deleteDonateRequest($data)
	{
		return $this->db->delete("tbldonaterequest",$data);
	}
}
?>