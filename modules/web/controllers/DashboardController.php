<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 21:04
 */
namespace app\modules\web\controllers;

use yii\web\Controller;

class DashboardController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

}