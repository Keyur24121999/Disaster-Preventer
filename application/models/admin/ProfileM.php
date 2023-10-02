<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProfileM extends CI_Model
{
	public function selectAdminById($data)
	{
		return $this->db->where($data)->get("tbladmin")->result();
	}

	public function updateAdmin($newdata,$where)
	{
		return $this->db->where($where)->update("tbladmin",$newdata);
	}
}
?>