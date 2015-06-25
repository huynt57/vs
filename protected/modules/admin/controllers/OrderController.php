<?php

class OrderController extends Controller {

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
    public $id = NULL;

    public function actionIndex() {
        $order = BookService::model()->findAll();

        $this->render('index', array('orders' => $order));
    }

    public function actionEdit() {
        $request = Yii::app()->request;
        if (isset($_GET)) {
            $id = Yii::app()->request->getQuery('id');
            $order = BookService::model()->findByAttributes(array('id' => $id));
        }
        $this->render('edit', array('order' => $order));
    }

    public function actionDelete() {
        $request = Yii::app()->request;
        if (isset($_GET)) {
            $id = Yii::app()->request->getQuery('id');
            $order = BookService::model()->deleteByPk(array('id' => $id));
            Yii::app()->user->setFlash('success', "Order deleted !");
            $this->redirect(Yii::app()->createUrl('admin/order'));
        }
        //   $this->render('edit', array('order' => $order));
    }

    public function actionSaveEdit() {
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
                $this->id = $this->getPostFilter('id');
                //store in database
                //  $this->saveSessionStepOne();
                $this->saveDb($this->id);
                Yii::app()->user->setFlash('success', "Order edited !");
                $this->redirect(Yii::app()->createUrl('admin/order'));
            } catch (exception $e) {
                var_dump($e->getMessage());
            }
        }
    }

    public function saveDb($id) {
        if ($id != "") {
            $model = BookService::model()->findByAttributes(array('id' => $id));
        } else {
            $model = new BookService;
        }
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

    public function getPostFilter($postName) {
        $value = Yii::app()->request->getPost($postName);
        $value = StringHelper::filterString($value);
        return $value;
    }

    public function actionAdd() {
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
                //  $this->saveSessionStepOne();
                $this->saveDb("");
                Yii::app()->user->setFlash('success', "Order added !");
                $this->redirect(Yii::app()->createUrl('admin/order'));
            } catch (exception $e) {
                var_dump($e->getMessage());
            }
        }
        $this->render('add');
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
