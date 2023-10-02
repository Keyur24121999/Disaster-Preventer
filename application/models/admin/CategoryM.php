<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoryM extends CI_Model
{
	public function selectAllCategory()
	{
		return $this->db->get("tblcategory")->result();
	}

	public function deleteCategory($data)
	{
		return $this->db->delete("tblcategory",$data);
	}

	public function selectCategoryById($data)
	{
		return $this->db->where($data)->get("tblcategory")->result();
	}

	public function updateCategory($newdata,$where)
	{
		return $this->db->where($where)->update("tblcategory",$newdata);
	}

	public function insertCategory($data)
	{
		return $this->db->insert("tblcategory",$data);
	}
}
?>