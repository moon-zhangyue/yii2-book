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
    public function __construct($id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
    }


    /*账户列表*/
    public function actionIndex()
    {
        return $this->render('index');
    }

    /*账户编辑*/
    public function actionSet()
    {
        return $this->render('set');
    }

    /*账户详情*/
    public function actionInfo()
    {
        return $this->render('info');
    }

    public function actionOps()
    {

    }
}