<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginM extends CI_Model
{
	public function selectLoginData($data)
	{
		return $this->db->where($data)->get("tbladmin")->result();
	}

	public function selectAdminByEmail($email)
	{
		return $this->db->select("a.*")->from("tbladmin a")->where_in("a.Email",$email)->get()->result();
	}

	public function updateAdmin($newdata,$where)
	{
		return $this->db->where($where)->update("tbladmin",$newdata);
	}
}
?>