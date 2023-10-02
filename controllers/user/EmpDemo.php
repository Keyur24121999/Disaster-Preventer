<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmpDemo extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/EmpDemoM","edm");
	}

	public function index()
	{
		if (!isset($_SESSION['ename'])) 
		{
			redirect("user/User");
		}
		$temp=array(
			"News"=>$this->edm->selectAllNews(),
			"Community"=>$this->edm->selectAllCommunity(),
			"User"=>$this->edm->selectAllUser(),
      "Forum"=>$this->edm->selectAllForums(),
			"Employee"=>$this->edm->selectAllEmployee()
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("user/Home1",$temp);
	}

  public function logout()
  {
    //$where=array("EmployeeId"=>$_SESSION['eid']);
    //$this->um->updateUser($newdata,$where);
    session_destroy();
    redirect("user/User");
  }

  public function loadAboutUs()
  {
    $temp=array(
      "Users"=>$this->edm->selectAllUser(),
      "Communities"=>$this->edm->selectAllCommunities(),
      "News"=>$this->edm->selectAllNews(),
      "Forums"=>$this->edm->selectAllForums()
    );
    $this->load->view("user/AboutUs",$temp);
  }

	public function PaymentGateway($ordID)
    {
        $amt=$this->CheckoutM->TotAmount($ordID);

        $paramList["MID"] = PAYTM_MERCHANT_MID;
        $paramList["ORDER_ID"] = $ordID;     
        $paramList["CUST_ID"] = 344;  
        $paramList["INDUSTRY_TYPE_ID"] = 'RETIAL';
        $paramList["CHANNEL_ID"] = 'WEB';
        $paramList["TXN_AMOUNT"] = $amt;
        $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
   
        $paramList["CALLBACK_URL"] = "http://localhost/bookbarns/index.php/Checkout/PaytmResponse";
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
        $currency=$paramList['CURRENCY'];
        $gatewayname=$paramList['GATEWAYNAME'];
        $bankname=$paramList['BANKNAME'];
        $respcode=$paramList['RESPCODE'];
        $txnid=$paramList['TXNID'];
        $txnamount=$paramList['TXNAMOUNT'];
        $ordid=$paramList['ORDERID'];
        $status=$paramList['STATUS'];
        $banktxnid=$paramList['BANKTXNID'];
        $txndate=$paramList['TXNDATE'];

        $paymentData=array(
            'currency'=>$currency,
            'gatewayname'=>$gatewayname,
            'bankname'=>$bankname,
            'respcode'=>$respcode,
            'txnid'=>$txnid,
            'txnamount'=>$txnamount,
            'order_id'=>$ordid,
            'status'=>$status,
            'banktxnid'=>$banktxnid,
            'txndate'=>$txndate
        );
   
       $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

       $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); 

       if($isValidChecksum == "TRUE")
       {
           if ($_POST["STATUS"] == "TXN_SUCCESS")
           { 
                $this->CheckoutM->insPaymentDetails($paymentData);
                redirect('Checkout/orderSuccess');
           }
           else {
               var_dump($paramList);
           }
       }else
       {
      
       }
    }
}
?>