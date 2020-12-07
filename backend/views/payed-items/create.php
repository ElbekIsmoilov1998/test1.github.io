<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PayedItems */

$this->title = Yii::t('app', 'Create Payed Items');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Payed Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payed-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
