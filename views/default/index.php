<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 13:09
 */
use \app\common\services\UrlService;
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=Yii::$app->params["title"];?></title>
    <?php $this->head() ?>
</head>
<body>
<?php //$this->beginBody() ?>
<div class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-collapse collapse pull-left">
            <ul class="nav navbar-nav ">
                <li><a href="">首页</a></li>
                <li><a target="_blank" href="">博客</a></li>
                <li><a href="">管理后台</a></li>
            </ul>
        </div>
    </div>
    <div class="jumbotron body-content">
        <div class="jumbotron text-center">
            <!--        <img src="--><?//= UrlService::buildWwwUrl("/images/common/qrcode.jpg"); ?><!--"/>-->
            <h3>扫码关注服务号体验会员端功能</h3>
        </div>
    </div>
</div>


