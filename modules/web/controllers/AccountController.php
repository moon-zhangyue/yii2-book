<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 17:08
 */
namespace app\modules\web\controllers;

use yii\web\Controller;

class AccountController extends  Controller
{
    /*账户列表*/
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    /*账户编辑*/
    public function actionSet()
    {
        $this->layout = false;
        return $this->render('set');
    }

    /*账户详情*/
    public function actionInfo()
    {
        $this->layout = false;
        return $this->render('info');
    }

    public function actionOps()
    {

    }
}