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
    public function __construct($id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = 'user';
    }

    /*
     * 登录
     * */
    public function actionLogin()
    {
        return $this->render('login');
    }

    /*
     * 编辑登录信息
     * */
    public function actionEdit()
    {
        return $this->render('edit');
    }

    /*
     * 编辑密码
     * */
    public function actionResetPwd()
    {
        return $this->render('reset_pwd');
    }
}