<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ForumM extends CI_Model
{
	public function selectAllForum()
	{
		return $this->db->order_by("ForumId","asc")->select("f.*,c.Title as ctl,u.*")->from("tblforum f")->join("tblcommunity c","c.CommunityId=f.CommunityId")->join("tbluser u","u.UserId=f.UserId")->get()->result();
	}

	public function deleteForum($data)
	{
		return $this->db->delete("tblforum",$data);
	}

	public function deleteComments($data)
	{
		return $this->db->delete("tblforumpost",$data);
	}

	public function deleteLikes($data)
	{
		return $this->db->delete("tblforumlike",$data);
	}

	public function selectCommunity($data)
	{
		return $this->db->order_by("ForumId","asc")->select("f.*,c.CommunityId,c.Title as ctl,c.Description as desc,c.CreatedDt as Dt,c.CoverPic,u.*")->from("tblforum f")->join("tblcommunity c","c.CommunityId=f.CommunityId")->join("tbluser u","u.UserId=f.UserId")->where_in("f.ForumId",$data)->get()->result();
	}

	public function selectComments($data)
	{
		return $this->db->order_by("ForumPostId","asc")->select("fp.*,f.*,u.Username,u.ProfileImage")->from("tblforumpost fp")->join("tblforum f","f.ForumId=fp.ForumId")->join("tbluser u","u.UserId=fp.UserId")->where_in("fp.ForumId",$data)->get()->result();
	}

	public function selectLikes($data)
	{
		return $this->db->order_by("ForumLikeId","asc")->select("fl.*,f.*,u.Username,u.ProfileImage")->from("tblforumlike fl")->join("tblforum f","f.ForumId=fl.ForumId")->join("tbluser u","u.UserId=fl.UserId")->where_in("fl.ForumId",$data)->get()->result();
	}
	
}
?>