<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeesM extends CI_Model
{
	public function selectAllEmployees()
	{
		return $this->db->order_by("EmployeeId","asc")->select("e.*,cat.*,c.CityName,s.StateName")->from("tblemployee e")->join("tblcity c","c.CityId=e.CityId")->join("tblstate s","s.StateId=c.StateId")->join("tblcategory cat","cat.CategoryId=e.CategoryId")->get()->result();
	}

	public function deleteEmployee($data)
	{
		return $this->db->delete("tblemployee",$data);
	}

	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();
	}

	public function selectAllCategory()
	{
		return $this->db->get("tblcategory")->result();
	}

	public function insertEmployee($data)
	{
		return $this->db->insert("tblemployee",$data);
	}

}
?>