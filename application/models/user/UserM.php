<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserM extends CI_Model
{
	public function selectLoginData($data)
	{
		return $this->db->where($data)->get("tbluser")->result();
	}

	public function selectEmpData($data)
	{
		return $this->db->where($data)->get("tblemployee")->result();
	}

	public function insertUser($data)
	{
		return $this->db->insert("tbluser",$data);
	}

	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();	
	}

	public function updateUser($newdata,$where)
	{
		return $this->db->where($where)->update("tbluser",$newdata);
	}

	public function updateEmployee($newdata,$where)
	{
		return $this->db->where($where)->update("tblemployee",$newdata);
	}	

	public function selectUserByEmail($email)
	{
		return $this->db->select("u.*")->from("tbluser u")->where_in("u.Email",$email)->get()->result();
	}

	public function selectEmployeeByEmail($email)
	{
		return $this->db->select("e.*")->from("tblemployee e")->where_in("e.Email",$email)->get()->result();
	}

	public function fetch_data()
	{
		return $this->db->get("tbluser")->result();
	}
}
?>