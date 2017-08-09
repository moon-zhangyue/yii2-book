<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 20:55
 */
namespace app\modules\web\controllers;

use yii\web\Controller;

class QrcodeController extends Controller
{
    /**
     * 渠道二维码列表
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    /*编辑二维码*/
    public function actionSet()
    {
        $this->layout = false;
        return $this->render('set');
    }
}