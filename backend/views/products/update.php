<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
?>
<div class="products-update">



    <div class="note note-success">
        <a href="<?= \yii\helpers\Url::to(['/products'])?>" class="btn btn-danger">Все Продукты</a>
        <h4 class="block bold">Обновить</h4>
    </div>



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
