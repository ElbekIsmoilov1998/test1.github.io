<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Category;





/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Категория'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-view">

    <div class="note note-success">
        <h4 class="block bold"><?= Html::encode($this->title) ?></h4>
    </div>


    <p>
        <?= Html::a(Yii::t('app', 'Обновить'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Удалить'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            [
                 'attribute' => 'parent_id',
                'value' => function($data) {
                    $category_name=Category::find()->where(['id' => $data->parent_id ])->one();
                    return $data->parent_id == '0' ? '<span class="label label-success">Главная категория</span>' :  $category_name->name;
                },
                'format' => 'html',
            ],
            'icons',
        ],
    ]) ?>

</div>
