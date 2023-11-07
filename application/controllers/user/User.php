<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/UserM","um");

		/*if (!isset($_SESSION['uname'])) 
		{
			redirect("login");
		}*/
	}

	public function index()
	{
		//$this->load->view("user/login");
		// $temp=array(
		// 	"cities"=>$this->um->selectAllCity()
		// );
		$this->load->view("user/Login"); 	
	}

	public function validateLogin()
	{
		$data=array(
			"Username"=>$this->input->post('txtUname'),
			"Password"=>$this->input->post('txtPwd')
		);
		$newdata=array(
			"Status"=>"1"
		);
		$loggedData=$this->um->selectLoginData($data);
		$EmpData=$this->um->selectEmpData($data);

		if (count($loggedData)>0) 
		{
			$_SESSION['uid']=$loggedData[0]->UserId;
			$_SESSION['uname']=$loggedData[0]->Username;
			$_SESSION['propic']=$loggedData[0]->ProfileImage;

			$where=array("UserId"=>$_SESSION['uid']);
			$this->um->updateUser($newdata,$where);
			redirect("user/UserDemo");
		}
		else if (count($EmpData)>0) 
		{
			$_SESSION['eid']=$EmpData[0]->EmployeeId;
			$_SESSION['ename']=$EmpData[0]->UserName;
			$_SESSION['coverimg']=$EmpData[0]->CoverImage;

			// $where=array("UserId"=>$_SESSION['uid']);
			// $this->um->updateUser($newdata,$where);
			redirect("user/EmpDemo");
		}
		else
		{
			$temp=array("loginErr"=>"Invalid UserName or Password");
			$this->load->view('user/Login',$temp);
		}
		
	}


	public function loadAddUser()
	{
		$temp=array(
			"cities"=>$this->um->selectAllCity()
		);
		$this->load->view("user/registration",$temp);
	}

	public function registerUser()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DisasterPreventor/resources/shared/images/".$img) or die("cannot upload image");

		$data=array(
			"Username"=>$this->input->post('txtUname'),
			"Password"=>$this->input->post('txtPwd'),
			"Email"=>$this->input->post('txtEmail'),
			"Gender"=>$this->input->post('txtGender'),
			"DOB"=>$this->input->post('BirthDate'),
			"CityId"=>$this->input->post('txtCity'),
			//"Status"=>$this->input->post('txtStatus'),
			"MobileNo"=>$this->input->post('txtMobile'),
			"ProfileImage"=>$img
		);
		$x=$this->input->post('txtOTP');
		$a=$this->input->post('OTP');
		$this->um->insertUser($data);
		redirect("user/User");
		/*if ($x==$a) 
		{
			$this->um->insertUser($data);
			redirect("user/User");
			//echo "Inserted";
		}
		else
		{
			redirect("User/loadAddUser");
		}*/
		
	}

	public function logout()
	{
		$where=array("UserId"=>$_SESSION['uid']);
		$newdata=array(
			"Status"=>"0"
		);
		$this->um->updateUser($newdata,$where);
		session_destroy();
		redirect("user/User");
	}

	public function checkusername()
	{
		$query='';

		if ($this->input->post('query')) 
		{
			$query=$this->input->post('query');
		}
		$data=$this->um->fetch_data();

		foreach ($data as $k) 
		{
			if ($k->Username === $query) 
			{
				?>
				*Already Taken
				<?php
			}
			
		}
	}

	public function send()
	{
		// $this->load->library('Email');
		// $config = array(
		//     'protocol' => 'smtp',
		//     'smtp_host' => 'ssl://smtp.gmail.com',
		//     'smtp_port' => 465,
		//     'smtp_user' => 'communitysystem007@gmail.com',
		//     'smtp_pass' => 'community@007'
		//     //'mailtype'  => 'html', 
		//     //'charset'   => 'iso-8859-1'
		// );
		// $email=$this->input->post('e');
  		// $OTP=rand("100000","900000");
		// $this->email->initialize($config);
  			
		// $this->email->from('communitysystem007@gmail.com', 'Community System');
		// $this->email->to($email);  
		// $this->email->subject('One Time Password');  
		// $this->email->message($OTP,"is your Community System Verification Code.");
		// $this->email->set_newline("\r\n");
		// //print_r($email);
		// $this->email->send();
		// echo $OTP;
		// // if ($this->email->send()) 
		// // {
		// // 	echo $OTP;
		// // }
		// // else
		// // {
		// // 	echo $this->email->print_debugger();		
		// // }


		$this->load->library('Email');
		$config = array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'smtp.gmail.com',
		    'smtp_port' => 587,
		    'smtp_user' => 'a1products0007@gmail.com',
		    'smtp_pass' => 'fmeennrukopxtbpx',
		    'mailtype'  => 'html', 
		    'charset'   => 'UTF-8',
		    'auth' => true
		);
		$email=$this->input->post('e');
  		$OTP=rand("100000","900000");
		$this->email->initialize($config);
		$this->load->library('email', $config);
  			
		$this->email->from('a1products0007@gmail.com', 'Disaster Preventor');
		$this->email->to($email);  
		$this->email->subject('One Time Password');  
		$this->email->message($OTP,"is your System Verification Code.");
		$this->email->set_newline("\r\n");
		// echo $OTP;
		if ($this->email->send()) 
		{
			echo $OTP;
			//die();
		}
		else
		{
			echo $this->email->print_debugger();		
		}
		/*if ($this->email->send()) 
		{
			echo $OTP;
			//die();
		}
		else
		{
			echo $this->email->print_debugger();		
		}*/
		//echo $OTP;
	}

	public function checkEmail()
	{
		//$a=$this->input->post('email');
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			echo '<lable class="text-dander"><span class="glyphicon glyphicon-remove">Invalid Email</span></lable>';
		}
		else
		{
			echo '<lable class="text-dander"><span class="glyphicon glyphicon-remove">Valid Email</span></lable>';
		}
	}

	public function loadForgetPassword()
	{
		$this->load->view("user/Forgotpassword");
	}

	public function ChangePassword()
	{
		$email=$this->input->post('txtEmail');
		$User=$this->um->selectUserByEmail($email);
		$Emp=$this->um->selectEmployeeByEmail($email);
		$newPwd=$this->input->post('txtNewPwd');
		$conPwd=$this->input->post('txtConPwd');
		
		if (count($User)>0) 
		{
			if ($newPwd==$conPwd) 
			{
				$data=array(
					"Password"=>$newPwd
				);
				$where=array(
					"UserId"=>$User[0]->UserId
				);
				//print_r("ok");
				// print_r($data);
				// print_r($where);
				$this->um->updateUser($data,$where);
				redirect("user/User");
				
			}
			else
			{
				$temp=array(
					"loginErr"=>"New Password & Confirm Password Does not Match"
				);
				//print_r($temp);
				$this->load->view("admin/ChangePassword",$temp);
			}
		}
		else if (count($Emp)>0) 
		{
			if ($newPwd==$conPwd) 
			{
				$data=array(
					"Password"=>$newPwd
				);
				$where=array(
					"EmployeeId"=>$Emp[0]->EmployeeId
				);
				//print_r("ok");
				// print_r($data);
				// print_r($where);
				$this->um->updateEmployee($data,$where);
				redirect("user/User");
				
			}
			else
			{
				$temp=array(
					"loginErr"=>"New Password & Confirm Password Does not Match"
				);
				//print_r($temp);
				$this->load->view("admin/ChangePassword",$temp);
			}
		}
		// else
		// {
		// 	$temp=array("loginErr"=>"Invalid UserName or Password");
		// 	$this->load->view('user/Login',$temp);
		// }

		if ($newPwd==$conPwd) 
		{
			$data=array(
				"Password"=>$newPwd
			);
			$where=array(
				"UserId"=>$User[0]->UserId
			);
			//print_r("ok");
			// print_r($data);
			// print_r($where);
			$this->um->updateUser($data,$where);
			redirect("user/User");
			
		}
		else
		{
			$temp=array(
				"loginErr"=>"New Password & Confirm Password Does not Match"
			);
			//print_r($temp);
			$this->load->view("admin/ChangePassword",$temp);
		}
	}
}
?>