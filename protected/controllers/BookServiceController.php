<?php

require_once(Yii::getPathOfAlias('application.components.vendor') . '/autoload.php');

//require_once(Yii::getPathOfAlias('application.components.Paypal') . '/bootstrap.php');


class BookServiceController extends Controller {

    public $layoutPath;
    public $layout;
    public $step = 1;
    public $airport = NULL;
    public $date = NULL;
    public $flight_time = NULL;
    public $flight_number = NULL;
    //data for contact

    public $name = NULL;
    public $add1 = NULL;
    public $add2 = NULL;
    public $add3 = NULL;
    public $city = NULL;
    public $province = NULL;
    public $country = NULL;
    public $postCode = NULL;
    public $email = NULL;
    public $contact_num = NULL;
    public $contact_num_2 = NULL;
    public $size = NULL;
    public $type = NULL;
    //data for paypal

    public $card_number = NULL;
    public $card_holder_name = NULL;
    public $expiry_year = NULL;
    public $expiry_month = NULL;
    public $cvc = NULL;
    public $first_name = NULL;
    public $last_name = NULL;
    //Billing Address

    public $bill_city = NULL;
    public $bill_address = NULL;
    public $bill_postcode = NULL;
    public $bill_country = NULL;

    public function actionIndex() {
        //  $this->render('index');
        $step = isset($_GET["step"]) ? $_GET["step"] : 0;
        switch ($step) {
            case 0:
                $this->render('price');
                break;
            case 1:
                $this->actionStep1();
                break;
            case 2:
                $this->actionStep2();
                break;
            case 3:
                $this->actionStep3();
                break;
            default:
                echo "404";
                break;
        }
    }

    public function actionPrepareStep() {
        $request = Yii::app()->request;
        if ($request->isPostRequest && isset($_POST)) {
            try {
                $this->airport = $this->getPostFilter('airport');
                $this->date = $this->getPostFilter('date');
                $this->flight_time = $this->getPostFilter('flight_time');
                $this->type = $this->getPostFilter('type');
                //store in database
                $this->saveDbStepOne();
                $this->saveSessionStepOne();
                $this->nextStep(1);
                $this->redirectStep(1);
            } catch (exception $e) {
                var_dump($e->getMessage());
            }
        }
    }

    public function actionStep1() {
        $this->layoutPath = Yii::getPathOfAlias('webroot') . "/themes/classic/views/layouts";
        $this->layout = 'nonPrepare';
        $this->checkSession(1);
        $request = Yii::app()->request;
        if ($request->isPostRequest && isset($_POST)) {
            try {
                $this->airport = $this->getPostFilter('airport');
                $this->date = $this->getPostFilter('date');
                $this->flight_time = $this->getPostFilter('flight_time');
                $this->flight_number = $this->getPostFilter('flight_number');
                $this->size = $this->getPostFilter('size');
                $this->postCode = $this->getPostFilter('postcode');
                $this->email = $this->getPostFilter('email');
                $this->add1 = $this->getPostFilter('add1');
                $this->name = $this->getPostFilter('name');
                $this->contact_num = $this->getPostFilter('contact_num');
                $this->contact_num_2 = $this->getPostFilter('contact_num_2');
                $this->type = $this->getPostFilter('type');

                //store in database
                $this->saveDbStepOne();
                //  $this->saveSessionStepOne();
                $this->nextStep(2);
                $this->redirectStep(2);
                return;
            } catch (exception $e) {
                var_dump($e->getMessage());
            }
        }
        //  die();
        $this->render('step1');
    }

    public function actionStep2() {
        // require_once(Yii::getPathOfAlias('application.components.Paypal') . '/autoload.php');
        $this->layoutPath = Yii::getPathOfAlias('webroot') . "/themes/classic/views/layouts";
        $this->layout = 'nonPrepare';
        $this->checkSession(2);
        $request = Yii::app()->request;
        if ($request->isPostRequest && isset($_POST)) {
            try {

                $this->card_number = $this->getPostFilter('card_number');
                $this->card_holder_name = $this->getPostFilter('card_holder_name');
                $this->expiry_year = $this->getPostFilter('expiry_year');
                $this->expiry_month = $this->getPostFilter('expiry_month');
                $this->cvc = $this->getPostFilter('cvc');
                $this->first_name = $this->getPostFilter('first_name');
                $this->last_name = $this->getPostFilter('last_name');
                $this->bill_city = $this->getPostFilter('bill_city');
                $this->bill_address = $this->getPostFilter('bill_address');
                $this->bill_country = $this->getPostFilter('bill_country');
                $this->bill_postcode = $this->getPostFilter('bill_postcode');

                $apiContext = new \PayPal\Rest\ApiContext(new \PayPal\Auth\OAuthTokenCredential(
                        "AZxYt_EVUMu9xXO0DHBHn4KGUVx6UMIdQKAb7QeCek609Zo3lFCAIfIKs29-T4PL66cSoN6189SfoACj", 
                        "ELebkFS3jmn9CNu4PF1t8OWaIsHASMDalHKp9x1dwEo0KmeKo582SfeVIC3CC99tmin7NoJZp00jI2Oc"));

                $addr = new \PayPal\Api\Address();
                $addr->setLine1($this->bill_address);
                $addr->setCity($this->bill_city);
                $addr->setCountryCode($this->bill_country);
                $addr->setPostalCode($this->bill_postcode);
                $addr->setState('OH');

                $card = new \PayPal\Api\CreditCard();
                $card->setNumber($this->card_number);
                $card->setType('visa');
                $card->setExpireMonth($this->expiry_month);
                $card->setExpireYear($this->expiry_year);
                $card->setCvv2($this->cvc);
                $card->setFirstName($this->first_name);
                $card->setLastName($this->last_name);
                $card->setBillingAddress($addr);



                $fi = new \PayPal\Api\FundingInstrument();
                $fi->setCreditCard($card);

                $payer = new \PayPal\Api\Payer();
                $payer->setPaymentMethod('credit_card');
                $payer->setFundingInstruments(array($fi));
                // $payer->setPayerInfo($payer_info);
//
//                $amountDetails = new PayPal\Api\Details();
//                $amountDetails->setSubtotal('0.1');
//                $amountDetails->setTax('0.01');
//                $amountDetails->setShipping('0.01');
//
                $amount = new \PayPal\Api\Amount();
                $amount->setCurrency('USD');
                $amount->setTotal('0.12');
//

                $transaction = new \PayPal\Api\Transaction();
                $transaction->setAmount($amount);
                $transaction->setDescription('This is the payment transaction description.');
////die();
////
//
                $redirectUrls = new \PayPal\Api\RedirectUrls();
                $redirectUrls->setReturnUrl(Yii::app()->createAbsoluteUrl('bookService/step3' . '?success=true'))
                        ->setCancelUrl(Yii::app()->createAbsoluteUrl('bookService/step3' . '?success=false'));
//
//
                $payment = new \PayPal\Api\Payment();
                $payment->setIntent('sale');
                $payment->setPayer($payer);
                $payment->setTransactions(array($transaction));

                try {
                    $res = $payment->create($apiContext);
                } catch (PayPal\Exception\PayPalConnectionException $e) {
                    echo $e->getData(); // This will print a JSON which has specific details about the error.
                    // exit(1);
                }

                //$approvalUrl = $payment->getApprovalLink();
                // echo $approvalUrl;
                //$this->redirect($approvalUrl);
                // $this->debug($approvalUrl);
                //echo CJSON::encode($payment);
                //   echo $res;
                //  $this->debug($res);
                //   $this->debug($redirectUrls);
                //   echo json_encode($t);
                //  $this->redirect($redirectUrls->getReturnUrl());
                $this->nextStep(3);
                $this->redirectStep(3);
            } catch (exception $e) {
                var_dump($e->getMessage());
            }
        }
        $this->render('step2');
    }

    public function actionStep3() {
//        $this->layoutPath = Yii::getPathOfAlias('webroot') . "/themes/classic/views/layouts";
//        $this->layout = 'nonPrepare';
//        if (isset($_GET['success']) && $_GET['success'] == 'true') {
//            $apiContext = new ApiContext(new OAuthTokenCredential(
//                    "AZxYt_EVUMu9xXO0DHBHn4KGUVx6UMIdQKAb7QeCek609Zo3lFCAIfIKs29-T4PL66cSoN6189SfoACj", "ELebkFS3jmn9CNu4PF1t8OWaIsHASMDalHKp9x1dwEo0KmeKo582SfeVIC3CC99tmin7NoJZp00jI2Oc"));
//            $paymentId = $_GET['paymentId'];
//            $payment = Payment::get($paymentId, $apiContext);
//
//            $execution = new PaymentExecution();
//            $execution->setPayerId($_GET['PayerID']);
//
//            try {
//                // Execute the payment
//                // (See bootstrap.php for more on `ApiContext`)
//                $result = $payment->execute($execution, $apiContext);
//                try {
//                    $payment = Payment::get($paymentId, $apiContext);
//                } catch (Exception $ex) {
//
//                    exit(1);
//                }
//            } catch (Exception $ex) {
//
//                exit(1);
//            }
//            return $payment;
//        } else {
//
//            exit;
//        }
        $this->checkSession(3);
        $this->render('step3');
    }

    public function redirectStep($step) {
        $this->redirect(Yii::app()->createUrl('bookService?step=' . $step));
    }

    public function nextStep($step) {
        $this->step = $step;
        Yii::app()->session['step'] = $this->step;
    }

    public function saveDbStepOne() {
        if (isset($this->airport, $this->date, $this->flight_time, $this->name, $this->add1, $this->postCode, $this->email, $this->contact_num, $this->size, $this->flight_number, $this->type)) {
            $model = new BookService;
            $model->airport = $this->airport;
            $model->date = $this->date;
            $model->flight_time = $this->flight_time;
            $model->flight_number = $this->flight_number;
            $model->name = $this->name;
            $model->add1 = $this->add1;
            $model->type = $this->type;
//            $model->add2 = $this->add2;
//            $model->add3 = $this->add3;
            $model->city = $this->city;
            //  $model->province = $this->province;
            //   $model->country = $this->country;
            $model->post_code = $this->postCode;
            $model->email = $this->email;
            $model->contact_num = $this->contact_num;
            $model->contact_num_2 = $this->contact_num_2;
            $model->size = $this->size;

            $model->save(FALSE);
        }
    }

    public function checkSession($requestStep) {
        if ($requestStep != Yii::app()->session['step']) {
            $this->redirectStep(Yii::app()->session['step']);
        }
    }

    public function checkStep($requestStep) {
        if ($requestStep != $this->step) {
            return $this->step;
        }
    }

    public function saveSessionStepOne() {
        Yii::app()->session['airport'] = $this->airport;
        Yii::app()->session['date'] = $this->date;
        Yii::app()->session['flight_time'] = $this->flight_time;
        Yii::app()->session['type'] = $this->type;
    }

    public function getPostFilter($postName) {
        $value = Yii::app()->request->getPost($postName);
        $value = StringHelper::filterString($value);

        return $value;
    }

    protected function saveStep() {
        Yii::app()->session['step'] = $this->step;
    }

    function debug($var) {
        $trace = debug_backtrace();
        $rootPath = dirname(dirname(__FILE__));
        $file = str_replace($rootPath, '', $trace[0]['file']);
        $line = $trace[0]['line'];
        $var = $trace[0]['args'][0];
        $lineInfo = sprintf('<div><strong>%s</strong> (line <strong>%s</strong>)</div>', $file, $line);
        $debugInfo = sprintf('<pre>%s</pre>', print_r($var, true));
        print_r($lineInfo . $debugInfo);
    }
    
    public function actionSendMail()
    {
        $mail = new YiiMailer();
        $mail->Body = "";
        $mail->send();
        
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
