<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('app', 'Обновить Категория: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Категория'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Обновить');
?>
<div class="category-update">

    <div class="note note-warning">
        <h2 class="block"><?= Html::encode($this->title) ?></h2>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
