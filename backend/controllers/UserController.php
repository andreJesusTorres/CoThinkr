<?php
namespace backend\controllers;

use Yii;
use backend\models\User;
use yii\web\controller;

class UserController extends Controller {

    public function actionIndex(){
        $users = User::find()->all();
        return $this->render('index', ['users' => $users]);
    }
}