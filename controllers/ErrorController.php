<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/7/29
 * Time: 22:35
 */
namespace app\controllers;

use Yii;
use yii\log\FileTarget;
use yii\web\Controller;
use yii\helpers\Html;


class ErrorController extends Controller
{
    /**
     * @error
     */
    public function actionError()
    {
        $this->layout = false;
        //记录错误信息到文件和数据库
        $error = \Yii::$app->errorHandler->exception;  //获取错误信息
        $err_msg = '';
        if($error){
            $file    = $error->getFile(); //错误文件
            $line    = $error->getLine(); //错误行数
            $message = $error->getMessage(); //错误信息
            $code    = $error->getCode(); //错误码

            $log = new FileTarget();  //保存日志消息到文件中.
            $log -> logFile = \Yii::$app->getRuntimePath().'/logs/err.log'; //指定错误日志地址

            $err_msg = $message."[file:{$file}][-line:{$line}][-message:{$message}][-code:{$code}][-url:{$_SERVER['REQUEST_URI']}][-POST-DATA:".http_build_query($_POST)."]";

                $log->messages[] = [
                $err_msg,
                1,
                'application',
                microtime(true)
            ];

            $log->export();//写入文件

            //todo 写入到数据库
        }
//        return $this->renderPartial('detail');
//        $this->layout = false;
        return $this->render("error",["err_msg" => $err_msg]);
//        return '错误页面</br>错误信息:'.$err_msg;
    }

}
