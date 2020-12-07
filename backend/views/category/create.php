<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('app', 'Добавать Категорию');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Категория'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <div class="note note-danger">
        <h2 class="block"><?= Html::encode($this->title) ?></h2>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
