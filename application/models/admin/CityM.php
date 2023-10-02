<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CityM extends CI_Model
{
	public function selectAllCity()
	{
		return $this->db->select("c.*,s.*")->from("tblcity c")->join("tblstate s","s.StateId=c.StateId")->get()->result();
	}

	public function insertCity($data)
	{
		return $this->db->insert("tblcity",$data);
	}

	public function deleteCity($data)
	{
		return $this->db->where($data)->delete("tblcity");
	}

	public function updateCity($newdata,$where)
	{
		return $this->db->where($where)->update("tblcity",$newdata);
	}

	public function selectCityById($data)
	{
		return $this->db->where($data)->get("tblcity")->result();
	}

	public function selectAllState()
	{
		return $this->db->get("tblstate")->result();
	}
}
?>