<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CommunityMemberM extends CI_Model
{
	public function selectAllCommunityMember()
	{
		return $this->db->order_by("CommunityMemberId","asc")->select("cm.*,c.Title,u.Username")->from("tblcommunitymember cm")->join("tblcommunity c","c.CommunityId=cm.CommunityId")->join("tbluser u","u.UserId=cm.UserId")->get()->result();
	}

	public function deleteCommunityMember($data)
	{
		return $this->db->delete("tblcommunitymember",$data);
	}

	public function deleteCommunityMemberByCommunityId($data)
	{
		return $this->db->delete("tblcommunitymember",$data);
	}

	public function updateCommunityMember($newdata,$where)
	{
		return $this->db->where($where)->update("tblcommunitymember",$newdata);
	}
}
?>