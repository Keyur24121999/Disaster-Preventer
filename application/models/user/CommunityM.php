<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CommunityM extends CI_Model
{
	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();	
	}

	public function selectAllCategory()
	{
		return $this->db->get("tblcategory")->result();	
	}

	public function insertCommunity($data)
	{
		$this->db->insert("tblcommunity",$data);
		return $this->db->insert_id();
	}

	public function insertForum($data)
	{
		return $this->db->insert("tblforum",$data);
	}

	public function insertCommunityCurator($d2)
	{
		return $this->db->insert("tblcommunitycurator",$d2);	
	}

	public function insertCommunityMember($data)
	{
		return $this->db->insert("tblcommunityMember",$data);
	}

	public function selectAllCommunity()
	{
		return $this->db->select("c.*,e.UserName,ct.CityName,cat.*,s.*")->from("tblcommunity c")->join("tblemployee e","e.EmployeeId=c.EmployeeId")->join("tblcity ct","ct.CityId=c.CityId")->join("tblstate s","s.StateId=ct.StateId")->join("tblcategory cat","cat.CategoryId=c.CategoryId")->get()->result();
	}

	public function selectCommunity($data)
	{
		return $this->db->select("c.*,cat.CategoryName,ct.CityName,s.StateName,e.UserName,e.CoverImage")->from("tblcommunitymember cm")->join("tblcommunity c","c.CommunityId=cm.CommunityId")->join("tblcategory cat","cat.CategoryId=c.CategoryId")->join("tblcity ct","ct.CityId=c.CityId")->join("tblstate s","s.StateId=ct.StateId")->join("tblemployee e","e.EmployeeId=c.EmployeeId")->where_in("cm.UserId",$data)->get()->result();
	}

	public function selectCommunityMemberByCommunityId($data)
	{
		return $this->db->select("cm.*,u.Username,u.ProfileImage")->from("tblcommunitymember cm")->join("tbluser u","u.UserId=cm.UserId")->join("tblcommunity c","c.CommunityId=cm.CommunityId")->where_in("c.CommunityId",$data)->get()->result();
	}

	public function selectCommunityEMPByCommunityId($data)
	{
		return $this->db->select("ce.*,e.*")->from("tblcommunityemp ce")->join("tblemployee e","e.EmployeeId=ce.EmployeeId")->join("tblcommunity c","c.CommunityId=ce.CommunityId")->where_in("c.CommunityId",$data)->get()->result();
	}

	public function selectCommunitybyId($data)
	{
		return $this->db->select("c.*,e.*,ct.CityName,st.*,cat.CategoryName")->from("tblcommunity c")->join("tblemployee e","e.EmployeeId=c.EmployeeId")->join("tblcity ct","ct.CityId=c.CityId")->join("tblstate st","st.StateId=ct.StateId")->join("tblcategory cat","cat.CategoryId=c.CategoryId")->where($data)->get()->result();
	}

	public function selectCommunityMemberByUserId($data)
	{
		return $this->db->where($data)->get("tblcommunitymember")->result();
	}

	public function selectCommunityMember($data,$d2)
	{
		return $this->db->where($data)->get("tblcommunitymember",$d2)->result();
	}

	public function selectCommunitybyUserId($data)
	{
		return $this->db->where($data)->get("tblcommunity")->result()[0];
	}

	public function selectCommunityRequestByCommunityId($data)
	{
		return $this->db->select("ccr.*,u.Username,c.CoverPic,c.Title")->from("tblcommunityrequest ccr")->join("tbluser u","u.UserId=ccr.UserId")->join("tblcommunity c","c.CommunityId=ccr.CommunityId")->where_in("c.CommunityId",$data)->get()->result();
	}

	public function selectCommunityRequestByUserId($data)
	{
		return $this->db->where($data)->get("tblcommunityrequest")->result();
	}

	public function insertCommunityRequest($data)
	{
		return $this->db->insert("tblcommunityrequest",$data);
	}

	public function deleteCommunityRequest($data)
	{
		return $this->db->where($data)->delete("tblcommunityrequest");
	}

	public function selectForumByCommunityId($data)
	{
		return $this->db->select("f.*,c.Title as ttl,u.Username,u.ProfileImage")->from("tblforum f")->join("tblcommunity c","c.CommunityId=f.CommunityId")->join("tbluser u","u.UserId=f.UserId")->where_in("f.CommunityId",$data)->get()->result();
	}

	public function selectForumById($data)
	{
		return $this->db->select("f.*,c.Title as ttl,c.Description as desc,c.CoverPic,c.CreatedDt as dt,u.Username,u.ProfileImage,ct.CityName,st.StateName")->from("tblforum f")->join("tblcommunity c","c.CommunityId=f.CommunityId")->join("tbluser u","u.UserId=f.UserId")->join("tblcity ct","ct.CityId=c.CityId")->join("tblstate st","st.StateId=ct.StateId")->where_in("f.ForumId",$data)->get()->result();
	}

	public function selectAllForumPost()
	{
		return $this->db->get("tblforumpost")->result();
	}

	public function selectAllForumPostByForumId($data)
	{
		return $this->db->select("fp.*,ct.CityName,fp.CreatedDt as dt,u.Username,u.Username,u.UserId as uid,u.ProfileImage,f.*")->from("tblforumpost fp")->join("tbluser u","u.UserId=fp.UserId")->join("tblforum f","f.ForumId=fp.ForumId")->join("tblcity ct","ct.CityId=u.CityId")->where_in("f.ForumId",$data)->get()->result();
	}

	public function insertForumPost($data)
	{
		return $this->db->insert("tblforumpost",$data);
	}

	public function selectForumLikeByForumId($data)
	{
		return $this->db->select("fl.*,u.Username,u.ProfileImage,ct.CityName")->from("tblforumlike fl")->join("tblforum f","f.ForumId=fl.ForumId")->join("tbluser u","u.UserId=fl.UserId")->join("tblcity ct","ct.CityId=u.CityId")->where_in("fl.ForumId",$data)->get()->result();
	}

	public function selectPostLikeByForumPostId($data)
	{
		return $this->db->select("pl.*,f.*,u.Username,u.UserId as uid,u.ProfileImage")->from("tblpostlike pl")->join("tblforumpost f","f.forumpostid=pl.forumpostid")->join("tbluser u","u.UserId=pl.UserId")->where_in("f.ForumPostId",$data)->get()->result();
	}

	public function checkLike($data)
	{
		return $this->db->where($data)->get("tblforumlike")->result();
	}

	public function LikePost($data)
	{
		return $this->db->insert("tblforumlike",$data);
	}

	public function UnlikePost($data)
	{
		return $this->db->delete("tblforumlike",$data);
	}

	public function selectForumPostByUserId($data)
	{
		return $this->db->get("tblforumpost",$data)->result();
	}

	public function selectCommunityQuestionsByCommunityId($data)
	{
		return $this->db->select("cq.*,cq.Title as tle,u.Username,u.UserId as uid,u.ProfileImage,c.*")->from("tblcommunityquestions cq")->join("tbluser u","u.UserId=cq.UserId")->join("tblcommunity c","c.CommunityId=cq.CommunityId")->where_in("c.CommunityId",$data)->get()->result();
	}

	public function selectCommQuesAnsByCommunityQuestionId($data)
	{
		return $this->db->select("ca.*,u.Username,u.UserId as uid,u.ProfileImage,cq.*")->from("tblcommquesans ca")->join("tbluser u","u.UserId=ca.UserId")->join("tblcommunityquestions cq","cq.CommunityQuestionId=ca.CommunityQuestionId")->where_in("cq.CommunityQuestionId",$data)->get()->result();
	}
	public function selectCommunityQuestionsById($data)
	{
		return $this->db->select("cq.*,u.Username,u.UserId as uid,u.ProfileImage,c.*")->from("tblcommunityquestions cq")->join("tbluser u","u.UserId=cq.UserId")->join("tblcommunity c","c.CommunityId=cq.CommunityId")->where($data)->get()->result();
	}

	public function insertCommunityQuestions($data)
	{
		return $this->db->insert("tblcommunityquestions",$data);
	}

	public function insertCommQuesAns($data)
	{
		return $this->db->insert("tblcommquesans",$data);
	}

	public function selectPostByUserId($data)
	{
		return $this->db->select("fp.*,f.*,u.Username,u.Email,u.ProfileImage")->from("tblforumpost fp")->join("tblforum f","f.forumid=fp.forumid")->join("tbluser u","u.UserId=fp.UserId")->where_in("fp.forumpostid",$data)->get()->result();
	}
}
?>