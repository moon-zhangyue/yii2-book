<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/8/9
 * Time: 23:10
 */
namespace app\modules\m\controllers;

use yii\web\Controller;

class PayController extends Controller
{
    /*
     * 购买支付页面
     * */
    public function actionBuy()
    {
        $this->layout = false;
        return $this->render('buy');
    }
}