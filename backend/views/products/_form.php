<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

use common\models\Category;
use dosamigos\fileupload\FileUpload;
use kartik\file\FileInput;



$categories=Category::find()->all();

$listData=yii\helpers\ArrayHelper::map($categories,'id', 'name');

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        $listData,
        [ ]
    ) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_file')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'showPreview' => false,
            'showCaption' => true,
            'showRemove' => true,
            'showUpload' => false
        ]
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0' => 'Не Показывать', '1' => 'Показывать', ], ['prompt' => 'Выберите статус для показа']) ?>



  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
