<?php
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");
defined('BASEPATH') OR exit('No direct script access allowed');
class UserDemo extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/UserDemoM","udm");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("user/User");
		}
		$temp=array(
			"News"=>$this->udm->selectAllNews(),
			"Community"=>$this->udm->selectAllCommunity(),
			"User"=>$this->udm->selectAllUser(),
      "Forum"=>$this->udm->selectAllForums(),
			"Employee"=>$this->udm->selectAllEmployee(),
      "City"=>$this->udm->selectAllCity(),
      "Category"=>$this->udm->selectAllCategory()
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/Home",$temp);
	}

  public function loadAboutUs()
  {
    $temp=array(
      "Users"=>$this->udm->selectAllUser(),
      "Communities"=>$this->udm->selectAllCommunities(),
      "News"=>$this->udm->selectAllNews(),
      "Forums"=>$this->udm->selectAllForums()
    );
    $this->load->view("user/AboutUs",$temp);
  }

  public function PaytmTransaction()
  {
    $data=array(
      "CategoryId"=>$this->input->post('txtCategory'),
      "CityId"=>$this->input->post('txtCity'),
      "TXNAMOUNT"=>$this->input->post('txtAmount'),
      "UserId"=>$_SESSION['uid']
    );
    $amt=$this->input->post('txtAmount');
    $CategoryId=$this->input->post('txtCategory');
    $CityId=$this->input->post('txtCity');
    $OrderId=$this->udm->insertPayment($data);

      //$amt=$this->input->post('txtAmount');
    redirect("user/UserDemo/PaymentGateway/$OrderId/$amt");
  }

	public function PaymentGateway($OrderId,$amt)
    {
        //$Amount=$amt;
        $ID=$PaymentId;
        //echo $amt;
        //exit();
        //$orderid=rand("1","90000000");
        $paramList["MID"] = PAYTM_MERCHANT_MID;
        $paramList["ORDER_ID"] = $OrderId;    
        $paramList["CUST_ID"] = 344;  
        $paramList["INDUSTRY_TYPE_ID"] = 'RETIAL';
        $paramList["CHANNEL_ID"] = 'WEB';
        $paramList["TXN_AMOUNT"] = $amt;
        $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
   
        $paramList["CALLBACK_URL"] = "http://localhost/DisasterPreventor/index.php/user/UserDemo/PaytmResponse";
        // $paramList["CategoryId"] = $this->input->post('txtCategory');
        // $paramList["CityId"] = $this->input->post('txtCity');
        $paramList["MSISDN"] = '77777777'; //Mobile number of customer
        $paramList["EMAIL"] ='foo@gmail.com';
        $paramList["VERIFIED_BY"] = "EMAIL"; //
        $paramList["IS_USER_VERIFIED"] = "YES"; //

        $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

        ?>
       
   
        <form id="myForm" action="<?php echo PAYTM_TXN_URL ?>" method="post">
        <?php
         foreach ($paramList as $a => $b) {
        echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
       }
       ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
        </form>
        <script type="text/javascript">
            document.getElementById('myForm').submit();
        </script>

        <?php
    }
     public function PaytmResponse()
     {
        $paytmChecksum = "";
        $paramList = array();
        $isValidChecksum = "FALSE";

        $paramList = $_POST;
        // echo "<pre>";
        // print_r($paramList);
        // exit();
        // echo "<pre>";
        // print_r($paramList);
        // exit();
       $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

       $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

       if($isValidChecksum == "TRUE")
       {
           if ($_POST["STATUS"] == "TXN_SUCCESS")
           { /// put your to save into the database // tansaction successfull
               //var_dump($paramList);
                $this->udm->insPaymentDetails($paramList);
                redirect("user/UserDemo");
           }
           else {/// failed
               var_dump($paramList);
           }
       }else
       {//////////////suspicious
          // put your code here
      
       }
    }
}
?>