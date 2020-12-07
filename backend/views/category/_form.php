<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use dosamigos\fileupload\FileUpload;
use kartik\file\FileInput;


$categories=Category::find()->where(['parent_id' => '0'])->all();
$listData=yii\helpers\ArrayHelper::map($categories,'id', 'name');

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList(
        $listData,
        [
            'prompt' => [
                'text' => 'Добавить как главная категория',
                'options' => [
                    'value' => 0,
                    'class' => 'prompt-class',
                    'selected' => 'selected'
                ]
            ]

        ]
    ) ?>

    <?= $form->field($model, 'icons')->textarea(['rows' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
