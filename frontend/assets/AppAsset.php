<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/30645dd6/bootstrap/css/bootstrap.min.css',
        'swiper/css/swiper-bundle.min.css?v=1602066147',
        'fontawesome/css/all.min.css?v=1602066138',
        'driftzoom/drift-basic.css?v=1602066137',
        'css/header-cart.css?v=1602576974',
        'css/buttonhover.css?v=1602066137',
        'animate/animate.min.css?v=1603628002',
        'css/style.css?v=1606571244',
        'assets/c3e5993c/css/language-picker.css',
        'assets/c3e5993c/css/flags-small.css',
        'assets/fba07a77/css/typeahead.css',
        'assets/fba07a77/css/typeahead-kv.css',
        'assets/fc8e0279/css/kv-widgets.css',
    ];
    public $js = [
        'assets/7cd3850/jquery.min.js',
        'assets/7cd3850/jquery.min.js',
        'assets/f4657534/yii.js',
        'assets/7b85e626/jquery.pjax.js',
        'assets/4f51b43b/jquery.countdown.min.js',
        'assets/25e67f4/js/bootstrap.bundle.js',
        'bootstrap/js/bootstrap.bundle.min.js?v=1602066137',
        'swiper/js/swiper-bundle.min.js?v=1602066147',
        'fontawesome/js/all.min.js?v=1602066139',
        'driftzoom/Drift.js?v=1602066137',
        'js/number-spinner.js?v=1602066147',
        'js/myscript.js?v=1603628002',
        'assets/c3e5993c/js/language-picker.js',
        'assets/fba07a77/js/typeahead.bundle.js',
        'assets/fba07a77/js/typeahead-kv.js',
        'assets/fba07a77/js/handlebars.js',
        'assets/fc8e0279/js/kv-widgets.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
