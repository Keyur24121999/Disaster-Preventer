<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpCommunity extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/EmpCommunityM","cm");
	}

	public function index()
	{
		if (!isset($_SESSION['ename'])) 
		{
			redirect("user/User");
		}
		$temp=array(
			"Community"=>$this->cm->selectAllCommunity()
		);
		$this->load->view("user/EmpallCommunity",$temp);
	}

	public function loadAddCommunity()
	{
		$temp=array(
			"cities"=>$this->cm->selectAllCity(),
			"cats"=>$this->cm->selectAllCategory()
		);
		$this->load->view("user/addCommunity",$temp);
	}

	// public function loadCommunityByUserId()
	// {
	// 	$data=array("UserId"=>$_SESSION['uid']);
	// 	$temp=array(
	// 		"Community"=>$this->cm->selectCommunity($data)
	// 	);
	// 	// echo "<pre>";
	// 	// print_r($temp);
	// 	// echo "</pre>";
	// 	$this->load->view("user/MyCommunity",$temp);
	// }

	public function loadCommunityByEmployeeId()
	{
		$data=array("EmployeeId"=>$_SESSION['eid']);
		$temp=array(
			"Community"=>$this->cm->selectCommunityByEmployeeId($data),
			"CommEmp"=>$this->cm->selectCommunity($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/EmpMyCommunity",$temp);
	}

	public function addCommunity()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"Title"=>$this->input->post('txtTitle'),
			//"Status"=>$this->input->post('txtStatus'),
			"EmployeeId"=>$_SESSION['eid'],
			"Description"=>$this->input->post('txtDesc'),
			"CategoryId"=>$this->input->post('txtCategory'),
			"Address"=>$this->input->post('txtAddress'),
			"CityId"=>$this->input->post('txtCity'),
			"CoverPic"=>$img
		);
		$this->cm->insertCommunity($data);
		//print_r($d2);
		//$this->cm->insertCommunityCurator($d2);
		//$this->cm->insertCommunityMember($d2);
		
		redirect("user/EmpCommunity");
	}

	public function loadAllCommunity()
	{
		$temp=array(
			"communities"=>$this->cm->selectAllCommunity()
		);
		$this->load->view("allCommunity",$temp);
	}

	public function loadCommunityById($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		$CommunityMember=$this->cm->selectCommunityMemberByCommunityId($data);
		$CommunityEmp=$this->cm->selectCommunityEMPByCommunityId($data);
		$community=$this->cm->selectCommunitybyId($data);

		// echo "<pre>";
		// print_r($CommunityEmp);
		// echo "</pre>";
		if (count($CommunityEmp)==0 && $community[0]->UserName!=$_SESSION['ename']) 
		{
			$temp=array(
				"Community"=>$this->cm->selectCommunityById($data),
				"CommunityMember"=>$CommunityMember,
				"CommunityEmp"=>$CommunityEmp,
				"Forum"=>$this->cm->selectForumByCommunityId($data),
				"Request"=>$this->cm->selectCommunityRequestByCommunityId($data),
				"CommunityEmp"=>$CommunityEmp
			);
		}
		else if ($community[0]->UserName==$_SESSION['ename']) 
		{
			$temp=array(
				"Community"=>$this->cm->selectCommunityById($data),
				"CommunityMember"=>$CommunityMember,
				"CommunityEmp"=>$CommunityEmp,
				"Forum"=>$this->cm->selectForumByCommunityId($data),
				"Request"=>$this->cm->selectCommunityRequestByCommunityId($data),
				"Msg"=>"Already Member of The Community"
			);
		}

		foreach ($CommunityEmp as $c) 
		{
			if ($c->UserName==$_SESSION['ename']) 
			{
				$temp=array(
					"Community"=>$this->cm->selectCommunityById($data),
					"CommunityMember"=>$CommunityMember,
					"CommunityEmp"=>$CommunityEmp,
					"Forum"=>$this->cm->selectForumByCommunityId($data),
					"Request"=>$this->cm->selectCommunityRequestByCommunityId($data),
					"Msg"=>"Already Member of The Community"
				);
			}
			/*else
			{
				$temp=array(
					"Community"=>$this->cm->selectCommunityById($data),
					"CommunityMember"=>$CommunityMember,
					"CommunityEmp"=>$CommunityEmp,
					"Forum"=>$this->cm->selectForumByCommunityId($data),
					"Request"=>$this->cm->selectCommunityRequestByCommunityId($data),
					"CommunityEmp"=>$CommunityEmp
				);
			}*/
		}
		
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/EmpCommunityMoreInfo",$temp);

	}

	public function loadAllCommunityMembersByCommunityId($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		$d2=array(
			"UserId"=>$_SESSION['uid']
		);
		$user=$this->cm->selectCommunityMemberByUserId($d2);

		$communities=$this->cm->selectCommunityMemberByCommunityId($data);
		/*echo "<pre>";
		print_r($communities);
		echo "</pre>";*/
		$com=$this->cm->selectCommunityMember($data,$d2);
		$member=$this->cm->selectCommunityMemberByCommunityId($data);
		$Community=$this->cm->selectCommunitybyUserId($data);
		/*echo "<pre>";
		print_r($Community);
		echo "</pre>";*/

		$a="";
		if (count($Community) > 0) 
		{
			if ($Community->UserId==$_SESSION['uid']) 
			{
				$a++;
				$temp=array(
					"communities"=>$this->cm->selectCommunityMemberByCommunityId($data),
					"comminfo"=>$this->cm->selectCommunitybyId($data),
					"userErr"=>"You are Already in this Community",
					"Msg"=>"Hello"
				);
				$this->load->view("moreinfoaboutCommunity",$temp);
			}

			foreach ($member as $m) 
			{		
				if ($m->Username==$_SESSION['uname'])
				{
					$a++;
					$temp=array(
						"communities"=>$this->cm->selectCommunityMemberByCommunityId($data),
						"comminfo"=>$this->cm->selectCommunitybyId($data),
						"userErr"=>"You are Already in this Community",
						"Queries"=>"Que"
					);
					$this->load->view("moreinfoaboutCommunity",$temp);
					break;
					//echo "Hello";
				}
				/*elseif ($Community->UserId==$_SESSION['uid']) 
				{
					$a++;
					$temp=array(
						"communities"=>$this->cm->selectCommunityMemberByCommunityId($data),
						"comminfo"=>$this->cm->selectCommunitybyId($data),
						"userErr"=>"You are Already in this Community",
						"Msg"=>"Hello"
					);
					$this->load->view("moreinfoaboutCommunity",$temp);
					break;
					//echo "Hello";
				}*/
			}

			if($a=="")
			{
				//echo "Hello";
				$temp=array(
					"communities"=>$this->cm->selectCommunityMemberByCommunityId($data),
					"comminfo"=>$this->cm->selectCommunitybyId($data),
					"userinfo"=>$this->cm->selectCommunityMemberByUserId($data)
				);
				$this->load->view("moreinfoaboutCommunity",$temp);
			}
		}
	}

	public function loadAllRequest($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		//print_r($data);
		$temp=array(
			"Request"=>$this->cm->selectCommunityRequestByCommunityId($data),
			"CommunityId"=>$cid
		);
		/*echo "<pre>";
		print_r($temp);
		echo "</pre>";*/
		$this->load->view("user/Request",$temp);
	}

	public function addCommunityMember($cid,$uid)
	{
		$data=array(
			"CommunityId"=>$cid,
			"UserId"=>$uid
		);
		//print_r($d2);
		$this->cm->insertCommunityMember($data);
		$this->cm->deleteCommunityRequest($data);

		redirect("user/EmpCommunity/loadAllRequest/$cid");
	}

	public function addCommunityRequest($cid)
	{
		$data=array(
			"CommunityId"=>$cid,
			"EmployeeId"=>$_SESSION['eid']
		);
		//print_r($data);
		$this->cm->insertCommunityEmp($data);
		redirect("user/EmpCommunity/loadCommunityById/$cid");
	}

	public function removeCommunityRequest($cid,$uid)
	{
		$data=array(
			"UserId"=>$uid,
			"CommunityId"=>$cid
		);
		$this->cm->deleteCommunityRequest($data);
		
		redirect("user/EmpCommunity/loadAllRequest/$cid");
	}

	public function loadForumByCommunityId($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		//print_r($data);
		$Post=$this->cm->selectForumByCommunityId($data);
		$member=$this->cm->selectCommunityMemberByCommunityId($data);
		$Emp=$this->cm->selectCommunityEMPByCommunityId($data);
		$Community=$this->cm->selectCommunitybyId($data);
		// echo "<pre>";
		// print_r($post);
		// echo "</pre>";
		if ($Community[0]->UserName!=$_SESSION['ename'])
		{
			$temp=array(
				//"Post"=>$this->cm->selectForumByCommunityId($data),
				"CommunityId"=>$cid,
				"Msg"=>"You have to Join the Community to View Forums"
			);	
			foreach ($Emp as $e)
			{
				if ($e->UserName==$_SESSION['ename'])
				{
					//$a++;
					//echo "Hello";
					$temp=array(
						"Post"=>$this->cm->selectForumByCommunityId($data),
						"CommunityId"=>$cid
					);
					
					//$this->load->view("user/Forum",$temp);
					//break;
				}
				else
				{
					$temp=array(
						//"Post"=>$this->cm->selectForumByCommunityId($data),
						"CommunityId"=>$cid,
						"Msg"=>"You have to Join the Community to View Forums"
					);
				}
			}	
		}
		else if ($Community[0]->UserName==$_SESSION['ename']) 
		{
			$temp=array(
				"Post"=>$this->cm->selectForumByCommunityId($data),
				"CommunityId"=>$cid
			);
				
		}
		else
		{
			$temp=array(
				//"Post"=>$this->cm->selectForumByCommunityId($data),
				"CommunityId"=>$cid,
				"Msg"=>"You have to Join the Community to View Forums"
			);
		}

		//$a="";
		
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/EmpForumbyCommunity",$temp);
	}

	public function loadForumById($fid)
	{
		$data=array("ForumId"=>$fid);

		$count=count($this->cm->checkLike($data));
		//print_r($count);
		if ($count==0)
		{
			$likeStatus="No";
		}
		else
		{
			$likeStatus="Yes";	
		}

		$temp=array(
			"Forum"=>$this->cm->selectForumById($data),
			"ForumPost"=>$this->cm->selectAllForumPostByForumId($data),
			"Like"=>$this->cm->selectForumLikeByForumId($data),
			"likeStatus"=>$likeStatus,
			"ForumId"=>$fid
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/EmpForumMoreInfo",$temp);
	}

	public function loadForumPost($fid,$cid)
	{
		$data=array(
			"ForumId"=>$fid
		);

		$d2=array("CommunityId"=>$cid);
		$temp=array(
			"Messages"=>$this->cm->selectAllForumPostByForumId($data),
			"Likes"=>count($this->cm->selectPostLikeByForumPostId($data)),
			"Post"=>$this->cm->selectForumByCommunityId($data),
			"CommunityId"=>$cid
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";

		$this->load->view("Comments",$temp);
	}

	public function addMessage($fid,$cid)
	{
		$Msg=$this->input->post('txtMsg');
		if ($Msg=="") 
		{
			
		}
		else
		{
			$data=array(
				"UserId"=>$_SESSION['uid'],
				"ForumId"=>$fid,
				"Messages"=>$Msg
			);
			$this->cm->insertForumPost($data);
		}	
		//print_r($data);
		redirect("user/Community/loadForumById/$fid");
	}

	public function loadLikes($fpid,$fid,$uid)
	{
		$data=array(
			"ForumPostId"=>$fpid,
			"UserId"=>$uid
		);

		$d2=array(
			"ForumId"=>$fid
		);

		$d3=array(
			"ForumPostId"=>$fpid
		);

		$d4=array(
			"UserId"=>$_SESSION['uid'],
			"ForumId"=>$fid
		);
		//$Msg=$m;
		//$a=$this->cm->selectForumPostByUserId($d4);
		$a=$this->cm->selectPostByUserId($d3);
		// $d5=array(
		// 	"UserId"=>$_SESSION['uid'],
		// 	"ForumPostId"=>$fpid
		// );
		$count=count($this->cm->checkLike($data));

		if ($count==0)
		{
			$likeStatus="No";
		}
		else
		{
			$likeStatus="Yes";	
		}

		$temp=array(
			"Likers"=>$this->cm->selectPostLikeByForumPostId($d3),
			"Likes"=>count($this->cm->selectPostLikeByForumPostId($d3)),
			"Messages"=>$this->cm->selectAllForumPostByForumId($d2),
			"likeStatus"=>$likeStatus,
			"ForumPostId"=>$fpid,
			"Msg"=>$a
		);
		// echo "<pre>";
		// print_r($a);
		// echo "</pre>";
		$this->load->view("Likes",$temp);
	}

	public function like($fid)
	{
		$data=array(
			"ForumId"=>$fid,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($data);
		$this->cm->LikePost($data);
		redirect("user/Community/loadForumById/$fid");
	}

	public function unlike($fid)
	{
		$data=array(
			"ForumId"=>$fid,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($data);
		$this->cm->UnlikePost($data);
		redirect("user/Community/loadForumById/$fid");
	}

	public function loadCommunityQuestionsByCommunityId($cid)
	{
		$data=array("CommunityId"=>$cid);
		
		$Community=$this->cm->selectCommunitybyUserId($data);
		if ($Community->UserId==$_SESSION['uid']) 
		{
			$temp=array(
				"Questions"=>$this->cm->selectCommunityQuestionsByCommunityId($data),
				"CommunityId"=>$cid,
				"Msg"=>"Ok"
			);
			$this->load->view("Query",$temp);
		}
		else
		{
			$temp=array(
				"Questions"=>$this->cm->selectCommunityQuestionsByCommunityId($data),
				"CommunityId"=>$cid
			);
			$this->load->view("Query",$temp);
		}
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		//$this->load->view("Query",$temp);
	}

	public function loadAllAnswersByCommunityQuestion($cqid,$cid)
	{
		$data=array("CommunityQuestionId"=>$cqid);
		$temp=array(
			"Answers"=>$this->cm->selectCommQuesAnsByCommunityQuestionId($data),
			"Questions"=>$this->cm->selectCommunityQuestionsById($data),
			"CommunityId"=>$cid
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("Answers",$temp);
	}
	
	public function loadAddCommunityQuestion($cid)
	{
		$data=array("CommunityId"=>$cid);
		$this->load->view("AddQuestion",$data);
	}

	public function addCommunityQuestion($cid)
	{
		$data=array(
			"CommunityId"=>$this->input->post('txtCID'),
			"UserId"=>$this->input->post('txtUserid'),
			"Title"=>$this->input->post('txtTitle'),
			"Question"=>$this->input->post('txtQuestion')
		);
		$this->cm->insertCommunityQuestions($data);
		redirect("Community/loadAllCommunityMembersByCommunityId/$cid");
		//print_r($data);
	}

	public function loadAddReply($cqid,$cid)
	{
		$data=array("CommunityQuestionId"=>$cqid,"CommunityId"=>$cid);
		$this->load->view("Reply",$data);
	}

	public function addCommQuesAns($cqid,$cid)
	{
		$ans=$this->input->post('txtAnswer');
		
		if($ans=="") 
		{
			$data=array(
				"Err"=>"Enter Your Answer",
				"CommunityQuestionId"=>$cqid,
				"CommunityId"=>$cid
			);
			$this->load->view("Reply",$data);
		}
		else
		{
			$data=array(
				"CommunityQuestionId"=>$cqid,
				"UserId"=>$this->input->post('txtUserid'),
				"Answer"=>$ans
			);
			$this->cm->insertCommQuesAns($data);
			redirect("Community/loadAllCommunityMembersByCommunityId/$cid");
		}
	}
}
?>