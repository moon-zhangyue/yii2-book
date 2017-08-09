<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/8/9
 * Time: 22:34
 */
namespace app\modules\m\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    /*
     * 商品列表
     * */
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    /*
     * 商品详情
     * */
    public function actionInfo()
    {
        $this->layout = false;
        return $this->render('info');
    }

    /*
     *用户下单
     * */
    public function actionOrder()
    {
        $this->layout = false;
        return $this->render('order');
    }
}