<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 15:54
 */
namespace app\modules\web\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    /*
     * 登录
     * */
    public function actionLogin()
    {
        $this->layout = false;
        return $this->render('login');
    }

    /*
     * 编辑登录信息
     * */
    public function actionEdit()
    {
        $this->layout = false;
        return $this->render('edit');
    }

    /*
     * 编辑密码
     * */
    public function actionResetPwd()
    {
        $this->layout = false;
        return $this->render('reset_pwd');
    }
}