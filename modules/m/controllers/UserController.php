<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/8/8
 * Time: 22:08
 */
namespace app\modules\m\controllers;


use yii\web\Controller;

class UserController extends Controller
{
    /*
     * 账号绑定
     * */
    public function actionBind()
    {
        $this->layout = false;
        return $this->render('bind');
    }

    /*
     * 购物车
     * */
    public function actionCart()
    {

    }
}