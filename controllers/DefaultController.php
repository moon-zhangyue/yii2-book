<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/7/29
 * Time: 22:05
 */
namespace app\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex(){
        $this->layout = false;
        return $this->render("index");
//        return '这是首页';
    }
}