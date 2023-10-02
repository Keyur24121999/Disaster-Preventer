<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session'); 
        $this->load->helper('form');
		$this->load->model("admin/LoginM","lm");
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->view("admin/login");
	}

	public function validateLogin()
	{
		$data=array(
			"Username"=>$this->input->post('txtUname'),
			"Password"=>$this->input->post('txtPwd')
		);
		//print_r($data);
		$loggedData=$this->lm->selectLoginData($data);
		/*echo "<br>";
		print_r($loggedData);*/
		if (count($loggedData)>0)
		{
			$_SESSION['aid']=$loggedData[0]->AdminId;
			$_SESSION['aname']=$loggedData[0]->Username;
			$_SESSION['propic']=$loggedData[0]->ProfilePic;

			redirect("admin/Demo");
		}
		else
		{
			$temp=array("loginErr"=>"Invalid Username or Password");
			$this->load->view("admin/login",$temp);
		}
	}

	public function Logout()
	{
		session_destroy();
		redirect("admin/login");
	}

	public function send()
	{
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

	public function loadForgetPassword()
	{
		$this->load->view("admin/ChangePassword");
	}

	public function ChangePassword()
	{
		// $abc=$x;
		// print_r($abc);
		$email=$this->input->post('txtEmail');
		$admin=$this->lm->selectAdminByEmail($email);
		//print_r($admin);
		$newPwd=$this->input->post('txtNewPwd');
		$conPwd=$this->input->post('txtConPwd');
		//$x=$this->input->post('txtOTP');
		//$a=$this->input->post('OTP');
		/*echo "x=";
		print_r($x);
		echo "<br>";
		echo "a=";
		print_r($a);
		echo "<br>";
		print_r($newPwd);
		echo "<br>";
		print_r($conPwd);*/
		if ($newPwd==$conPwd) 
		{
			$data=array(
				"Password"=>$newPwd
			);
			$where=array(
				"AdminId"=>$admin[0]->AdminId
			);
			//print_r("ok");
			// print_r($data);
			// print_r($where);
			$this->lm->updateAdmin($data,$where);
			redirect("admin/Login");
			
		}
		else
		{
			$temp=array(
				"Err"=>"New Password & Confirm Password Does not Match"
			);
			//print_r($temp);
			$this->load->view("admin/ChangePassword",$temp);
		}
	}
}
?>