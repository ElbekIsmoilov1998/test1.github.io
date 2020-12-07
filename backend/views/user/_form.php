<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\AuthAssignment;
/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */

$authAssignment = AuthAssignment::find()->all();
$listData = yii\helpers\ArrayHelper::map($authAssignment,'user_id', 'item_name');
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'id')->dropDownList(
//        $listData,
//        [
//            'prompt' => 'Выбор текущий раздел',
//        ]
//    ) ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'username')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
