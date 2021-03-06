<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 20:19
 */

namespace app\modules\web\controllers;

use yii\web\Controller;

class BookController extends Controller
{

    public function __construct($id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
    }

    /*图书列表*/
    public function actionIndex()
    {
        return $this->render('index');
    }

    /*图书详情*/
    public function actionInfo()
    {
        return $this->render("info");
    }

    /*图书编辑*/
    public function actionSet()
    {
        return $this->render("set");
    }

    /*图书图片资源*/
    public function actionImages()
    {
        return $this->render("images");
    }

    /*图书分类列表*/
    public function actionCat()
    {
        return $this->render("cat");
    }

    /*图书分类编辑*/
    public function actionCat_set()
    {
        return $this->render("cat_set");
    }

}
