<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'css/site.css',
        'css/common.css',
        'css/global/font-awesome.css',
//        'css/global/bootstrap.css',
        'css/global/bootstrap-switch.css',
        'css/global/components-rounded.css',
        'css/global/plugins.css',
        'css/layouts/layout.css',
        'css/layouts/darkblue.css',
        'css/layouts/default.css',
        'css/layouts/custom.css',
        'css/global/select2.min.css',
        'css/global/select2-bootstrap.min.css',
        'css/layouts/login-4.min.css',
    ];
    public $js = [
        'js/global/jquery.min.js',
        'js/global/bootstrap.js',
        'js/global/js.cookie.js',
        'js/global/bootstrap-hover-dropdown.js',
        'js/global/jquery.slimscroll.js',
        'js/global/jquery.blockui.min.js',
        'js/global/bootstrap-switch.js',
        'js/global/bootstrap-contextmenu.js',
        'js/global/app.js',
        'js/global/components-context-menu.js',
        'js/layout/layout.js',
        'js/layout/demo.js',
        'js/layout/quick-sidebar.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
