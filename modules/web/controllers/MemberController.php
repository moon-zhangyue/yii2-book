<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 20:48
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class MemberController extends Controller
{
    /**
     * 会员列表
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    /*会员详情*/
    public function actionInfo()
    {
        $this->layout = false;
        return $this->render('info');
    }

    /*编辑会员*/
    public function actionSet()
    {
        $this->layout = false;
        return $this->render('set');
    }
}
