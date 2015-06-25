<?php
class PayStation extends CApplicationComponent
{
	// config
	var $paystationId	= "610122";//'611185';
	var $gatewayId	= 'CARDPAY';
	var $merchantRef = 'auto_test';
	var $testMode = 'true';

	//
	public function init()
	{

	}
	public function getPaymentUrl($invoice_id,$options=array())
	{
		$invoice = Invoice::model()->findByPk($invoice_id);
		if($invoice==null)
			return false;
		if($invoice->customer_id!=Yii::app()->user->getId())
			return false;
		$amount = $invoice->amount;
		$amount = $amount*100;
		$merchantSession = urlencode(time().'-'.$this->makePaystationSessionID(8,8));
		$this->setSessionId($merchantSession);
		$this->merchantRef = Yii::app()->user->getId();
		$paystationUrl = "https://www.paystation.co.nz/direct/paystation.dll";
		$paystationParameters = "paystation=_empty&pstn_pi=".$this->paystationId."&pstn_gi=".$this->gatewayId."&pstn_ms=".$merchantSession."&pstn_mr=".$this->merchantRef."&pstn_am=".$amount."&pstn_nr=t";
		if 	($this->testMode == 'true'){
			$paystationParameters = $paystationParameters."&pstn_tm=t";
		}
		foreach($options as $key => $value)
		{
			$paystationParameters .= "&".$key."=".$value;
		}
		$result = $this->doPostRequest($paystationUrl, $paystationParameters);
		// handle result
		$xmlData = new SimpleXMLElement($result);
		$digitalOrder = $xmlData->DigitalOrder; // The URL that we re-direct the customer too.
		$transactionID =  $xmlData->PaystationTransactionID;  //The transaction ID Paystation has just created.
		$PaymentRequestTime =  $xmlData->PaymentRequestTime; // The time that the transaction was initiated
		$DigitalOrderTime =  $xmlData->DigitalOrderTime;  //The time Paystation responds
		// redirect
		if ($digitalOrder) {
			$payment = new Payment();
			$payment->transaction_id = $transactionID;
			$payment->session_id = $merchantSession;
			$payment->order_time = $DigitalOrderTime;
			$payment->merchant_ref = $this->merchantRef;
			$payment->customer_id = Yii::app()->user->getId();
			$payment->invoice_id = $invoice_id;
			$payment->save(false);

			return $digitalOrder;
		} else {
			//echo "<pre>".htmlentities($result)."</pre>"; //no digitalorder variable, so initiation must have failed.  Print out xml packet for debugging purposes
			return false;
		}
		return false;
	}
	public function doPayment($invoice_id)
	{
		$url = $this->getPaymentUrl($invoice_id);
		if($url!==false){
			Yii::app()->controller->redirect($url);
			return true;
		}
		return false;
	}
	public function getSessionId()
	{
		return isset(Yii::app()->session["paystation_session_id"]) ? Yii::app()->session["paystation_session_id"] : false;
	}
	public function setSessionId($sessionId)
	{
		Yii::app()->session["paystation_session_id"] = $sessionId;
		return true;
	}
	public function deleteSessionId()
	{
		unset(Yii::app()->session["paystation_session_id"]);
	}
	protected function makePaystationSessionID($min=8,$max=8)
	{
		$pass = "";
		# seed the random number generator - straight from PHP manual
		$seed = (double)microtime()*getrandmax();
		srand($seed);
		# make a string of $max characters with ASCII values of 40-122
		$p=0; 
		while ($p < $max){
			$r=123-(rand()%75);
			$pass.=chr($r);
			$p++;
		}
		# get rid of all non-alphanumeric characters
		$pass=preg_replace("/[^a-zA-NP-Z1-9+]/","",$pass);
		# if string is too short, remake it
		if (strlen($pass)<$min){
			$pass=$this->makePaystationSessionID($min,$max);
		}
		return $pass;
	}

	protected function doPostRequest($paystationUrl, $paystationParameters)
	{

	    $paramArray=explode('&',$paystationParameters);
	    foreach ($paramArray as $param) {
	        $parts=explode('=',$param);
	        $associativeArray[$parts[0]]=$parts[1];
	    }

	    $formattedData = http_build_query($associativeArray);

	    $contextOptions = array (
	        'http' => array (
	            'method' => 'POST',
	            'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
	                . "Content-Length: " . strlen($formattedData) . "\r\n",
	            'content' => $formattedData
	            )
	        );
	     $ctx = stream_context_create($contextOptions);
	     $fp = @fopen($paystationUrl, 'r', false, $ctx);
	     $response = @stream_get_contents($fp);
	    
	     return $response;
	}

	public function handlePostBack()
	{
		$postData = file_get_contents("php://input"); //Get the contents of the XML packet that has been POSTed back from Paystation.
		
		//$content = $postData;
       
		$xml = simplexml_load_string($postData);  // Create an XML string    
		
		//Create variables from the XML packet.
		$errorCode = $xml->ec;
		$errorMessage = $xml->em;
		$transactionId = $xml->ti;
		$cardType = $xml->ct;
		$merchantReference = $xml->merchant_ref;
		$testMode = $xml->tm;
		$merchantSession = $xml->MerchantSession;
		$usedAcquirerMerchantId = $xml->UsedAcquirerMerchantID;
		$amount = $xml->PurchaseAmount; // Note this is in cents
		$transactionTime = $xml->TransactionTime;
		$requestIp = $xml->RequestIP;
		$orderTime = $xml->DigitalOrderTime;
		$receiptTime = $xml->DigitalReceiptTime;
		$cardNo = $xml->CardNo;
		
		//$content = json_encode($xml);
		//Util::sendMailWithContent("thanhtung9630@gmail.com","CompendiumHQ Post Back Debug","content:".$content);    

		$payment = Payment::model()->findByAttributes(array(
			"session_id" => $merchantSession
		));
		if($payment==null)
		{
			return false;
		}

		$payment->error_code = $errorCode;
		if(intval($errorCode)==0){
			// success
			$payment->card_type = $cardType;
			$payment->amount = intval($amount);
			$payment->request_ip = $requestIp;
			$payment->receipt_time = $receiptTime;
			$payment->card_number = $cardNo;
		}
		else {
			// error

		}
		$result = $payment->save();
		if($result){
			$payment->onSuccess();
			//Util::sendMailWithContent("thanhtung9630@gmail.com","CompendiumHQ Post Back Debug SUCCESS","success!!!"); 
			Util::sendMail("thanhtung9630@gmail.com","Test Send Mail Generated From Template","mail_after_customer_payment",$payment->customer->profile->getAttributes());
		}
		else{
			Util::sendMailWithContent("thanhtung9630@gmail.com","CompendiumHQ Post Back Debug ERROR",Util::getFirstError($payment));  
		}
		return $result;
	}

	public function handleReturn()
	{
		$transactionId = @$_GET['ti'];
		$errorCode = @$_GET['ec'];
		$errorMessage = @$_GET['em'];
		$cardNumber = @$_GET['cardno'];
		$merchantSession = @$_GET["ms"];

		$payment = Payment::model()->findByAttributes(array(
			"session_id" => $merchantSession
		));

		return $payment;
	}
}