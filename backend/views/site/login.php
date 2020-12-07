<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;



$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <!DOCTYPE html>
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="description">
        <meta name="keywords">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="/../backend/web/css/global/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="/../backend/web/css/global/simple-line-icons.css" rel="stylesheet" type="text/css" />
        <link href="/../backend/web/css/global/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="/../backend/web/css/global/bootstrap-switch.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/../backend/web/css/global/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="/../backend/web/css/global/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/../backend/web/css/global/components-rounded.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/../backend/web/css/global/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/../backend/web/css/layouts/login-4.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <?php $this->head() ?>
    </head>
    <body class=" login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.html">
            <img src="/../backend/web/img/logo-big.png" alt="" /> </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <form class="login-form" action="index.html" method="post">
            <h3 class="form-title">Войти на ваш аккаунт</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="input-icon">

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?> </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">

                    <?= $form->field($model, 'password')->passwordInput() ?> </div>
            </div>
            <div class="form-actions">
                <label class="rememberme mt-checkbox mt-checkbox-outline">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </label>
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary pull-right', 'name' => 'login-button']) ?>
            </div>


        </form>
        <?php ActiveForm::end(); ?>
        <!-- END LOGIN FORM -->


    </div>
    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT -->
    <div class="copyright"> 2019 &copy; Mаслахат-Аудит - Администратор. </div>
    <!-- END COPYRIGHT -->
    <!--[if lt IE 9]>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="/../backend/web/js/global/jquery.min.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/bootstrap.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/js.cookie.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/bootstrap-hover-dropdown.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/jquery.slimscroll.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/bootstrap-switch.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/../backend/web/js/global/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/additional-methods.min.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/select2.full.min.js" type="text/javascript"></script>
    <script src="/../backend/web/js/global/jquery.backstretch.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="/../backend/web/js/global/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/../backend/web/js/layout/login-4.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->










    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>