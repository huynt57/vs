<?php

class HomeController extends Controller {

    public $layoutPath;
    public $layout;

    public function actionIndex() {
        $this->render('index');
    }

    public function actionLogin() {
        $this->layoutPath = Yii::getPathOfAlias('webroot') . "/themes/classic/views/layouts";
        $this->layout = 'login';
        $request = Yii::app()->request;
        if ($request->isPostRequest && isset($_POST)) {
            try {
                $admin_name = StringHelper::filterString(Yii::app()->request->getPost('admin_name'));
                $admin_password = StringHelper::filterString(Yii::app()->request->getPost('admin_password'));
                $user = User::model()->findByAttributes(array('email' => $admin_name));
                if ($user) {

                    //user existed, check password
                    if ($user->password == md5($admin_password)) {
                        Yii::app()->session['id_admin'] = $user->id;
                        Yii::app()->session['email'] = $user->email;
                        Yii::app()->session['username'] = $user->username;
                        Yii::app()->session['permission'] = $user->permission;
                        $this->redirect(Yii::app()->createUrl('admin/order'));
                    } else {
                        Yii::app()->user->setFlash('fail', "Wrong Password");
                        $this->redirect(Yii::app()->createUrl('admin/home/login'));
                    }
                    // }
                } else {
                    Yii::app()->user->setFlash('fail', "User not exist");
                    $this->redirect(Yii::app()->createUrl('admin/home/login'));
                }
            } catch (exception $e) {

                echo ($e->getMessage());
            }
        }
        $this->render('login');
    }

    public function actionchangePassword() {
        $request = Yii::app()->request;
        if ($request->isPostRequest && isset($_POST)) {
            try {
                $old_pass = StringHelper::filterString(Yii::app()->request->getPost('old_password'));
                $pass1 = StringHelper::filterString(Yii::app()->request->getPost('password'));
                $pass2 = StringHelper::filterString(Yii::app()->request->getPost('password2'));
                $user = User::model()->findByAttributes(array('password' => md5($old_pass)));
                if ($user) {
                    if ($pass1 == $pass2) {
                        $user->password = md5($pass1);
                        $user->save(FALSE);
                        Yii::app()->user->setFlash('success', "Password changed !");
                        $this->redirect(Yii::app()->createUrl('admin/order'));
                    }
                } else {

                    $this->redirect(Yii::app()->createUrl('admin/home/login'));
                }
            } catch (exception $e) {

                echo ($e->getMessage());
            }
        }
        $this->render('changePassword');
    }

    public function actionLogout() {
        unset(Yii::app()->session['username']);
        unset(Yii::app()->session['id_admin']);
        unset(Yii::app()->session['email']);
        unset(Yii::app()->session['permission']);
        $this->redirect(Yii::app()->createUrl('admin/home/login'));
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
