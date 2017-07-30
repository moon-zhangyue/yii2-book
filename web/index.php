<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

/*定义版本号变量*/
if(file_exists("/data/www/release_version/version_book")){
    define("RELEASE_VERSION",trim( file_get_contents("/data/www/release_version/version_book") ) );
}else{
    define( "RELEASE_VERSION",time() );
}
//var_dump(RELEASE_VERSION);EXIT();
(new yii\web\Application($config))->run();
