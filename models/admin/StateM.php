<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StateM extends CI_Model
{
	public function selectAllState()
	{
		return $this->db->get("tblstate")->result();
	}

	public function insertState($data)
	{
		return $this->db->insert("tblstate",$data);
	}

	public function deleteState($data)
	{
		return $this->db->where($data)->delete("tblstate");
	}

	public function updateState($newdata,$where)
	{
		return $this->db->where($where)->update("tblstate",$newdata);
	}

	public function selectStateById($data)
	{
		return $this->db->where($data)->get("tblstate")->result();
	}

}
?>