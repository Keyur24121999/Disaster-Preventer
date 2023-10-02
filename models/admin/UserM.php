<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserM extends CI_Model
{
	public function selectAllUser()
	{
		return $this->db->order_by("UserId","asc")->select("u.*,c.CityName,s.StateName")->from("tbluser u")->join("tblcity c","c.CityId=u.CityId")->join("tblstate s","s.StateId=c.StateId")->get()->result();
	}

	public function deleteUser($data)
	{
		return $this->db->delete("tbluser",$data);
	}

	/*public function selectAllCity()
	{
		->order_by("UserId","asc")
		return $this->db->get("tblcity")->result();
	}*/
}
?>