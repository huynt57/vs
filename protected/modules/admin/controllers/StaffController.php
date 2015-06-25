<?php

class StaffController extends Controller {

    public $title;
    
    public function actionIndex() {
        $orders = BookService::model()->findAllByAttributes(array('status' => 1));
        $this->render('index', array('orders' => $orders));
    }

    public function actionWaitList() {

        $this->render('waitlist');
    }

    public function actionDone() {
        $orders = BookService::model()->findAllByAttributes(array('status' => 2));
        $this->render('done', array('orders' => $orders));
    }

    public function actionAccept() {
        $request = Yii::app()->request;
        if (isset($_GET)) {
            $id = Yii::app()->request->getQuery('id');
            $order = BookService::model()->findByAttributes(array('id' => $id));
            $order->status = 2;
            $order->save(FALSE);
            Yii::app()->user->setFlash('success', "Order Accepted !");
            $this->redirect(Yii::app()->createUrl('admin/staff'));
        }
    }

    public function actionReject() {
        $request = Yii::app()->request;
        if (isset($_GET)) {
            $id = Yii::app()->request->getQuery('id');
            $order = BookService::model()->findByAttributes(array('id' => $id));
            $order->status = 5;
            $this->sendMailSorry($order->email);
            $order->save(FALSE);
            Yii::app()->user->setFlash('success', "Order rejected !");
            $this->redirect(Yii::app()->createUrl('admin/staff'));
        }
    }

    public function sendMailSorry($email) {
        try {
            $this->title = "Mail test";
            $mail = new YiiMailer();
            $mail->setView('sorry');
            $mail->setFrom('harajuku.chelsea.1994@gmail.com', 'John Doe');
            $mail->setSubject('Confirm your order');
            $mail->setTo($email);
            $mail->send();
            var_dump($mail->getError());
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
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
