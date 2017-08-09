<?php
/**
 * Created by PhpStorm.
 * User: Moon
 * Date: 2017/7/30
 * Time: 17:11
 */
//use \app\common\services\ConstantMapService;
//use \app\common\services\UrlService;
//use \app\common\services\UtilService;
//use \app\common\services\StaticService;
//StaticService::includeAppJsStatic( "/js/web/account/index.js",\app\assets\WebAsset::className() );
?>

<?php //echo Yii::$app->view->renderFile("@app/modules/web/views/common/tab_account.php",[ 'current' => 'index' ]);?>

<div class="row">
    <div class="col-lg-12">
        <form class="form-inline wrap_search">
            <div class="row m-t p-w-m">
                <div class="form-group">
                    <select name="status" class="form-control inline">
                        <option value="">请选择状态</option>

                    </select>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="mix_kw" placeholder="请输入姓名或者手机号码" class="form-control" value="">
                        <input type="hidden" name="p" value="">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary search">
                                <i class="fa fa-search"></i>搜索
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-w-m btn-outline btn-primary pull-right" href="">
                        <i class="fa fa-plus"></i>账号
                    </a>
                </div>
            </div>
        </form>
        <table class="table table-bordered m-t">
            <thead>
            <tr>
                <th>序号</th>
                <th>姓名</th>
                <th>手机</th>
                <th>邮箱</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        <!--分页代码已被封装到统一模板文件中-->
<!--        --><?php //echo \Yii::$app->view->renderFile("@app/modules/web/views/common/pagination.php", [
//            'pages' => $pages,
//            'url' => '/account/index',
//            'search_conditions' => [],
//        ]); ?>
    </div>
</div>

