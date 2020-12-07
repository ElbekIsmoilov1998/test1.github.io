<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
?>
<div class="products-view">
    <a href="<?= \yii\helpers\Url::to(['/products'])?>" class="btn btn-danger" style="margin: 10px">Все Продукты</a>
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'status',
                'value' => function($data) {
                    return $data->status == '1' ? '<span class="label label-success">Активен</span>' : '<span class="label label-danger">Не активен</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'category_id',
                'value' => function($data) {
                    $category_name=Category::find()->where(['id' => $data->category_id ])->one();
                    return $data->category_id == '0' ? $category_name->name :  $category_name->name;
                },
                'format' => 'html',
            ],
            'name:ntext',
            'number',
            'price',
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute' => 'image',
                'format' => 'html',
                'value' => function($data){
                    return Html::img('/img/'.$data->image,['style' => ['max-height'=>'40px','max-width' => '30px'] ,
                        'class' => 'img img-responsive',
                        'style' => [
                            'border-radius'=>'5px',
                            'max-height' => '100px',
                            'max-width' => '90px',
                        ]]);
                }
            ],

        ],
    ]) ?>

</div>
