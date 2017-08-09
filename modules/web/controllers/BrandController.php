<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 19:55
 */
namespace app\modules\web\controllers;

use yii\web\Controller;

class BrandController extends Controller
{
    /*品牌详情*/
    public function actionInfo()
    {
        $this->layout = false;
        return $this->render('info');
    }

    /*品牌编辑*/
    public function actionSet()
    {
        $this->layout = false;
        return $this->render('set');
    }

    /*品牌相册*/
    public function actionImages()
    {
        $this->layout = false;
        return $this->render('images');
    }

}