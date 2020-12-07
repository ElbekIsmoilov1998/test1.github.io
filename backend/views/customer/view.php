<?php

use yii\widgets\DetailView;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Customer */
?>
<div class="customer-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            'number',
            [
                'attribute'=>'product_id',
                'label' => 'Продукт',
                'value' => function($data) {
                    $categories=\common\models\Products::find()->where(['id' => $data->product_id ])->one();
                    return  $categories->name;
                },
                'format' => 'html',
            ],
            'date',
            [
                'attribute'=>'product_id',
                'label' => 'Фото',
                'format' => 'html',
                'value' => function($data){
                    $categories=\common\models\Products::find()->where(['id' => $data->product_id ])->one();

                    return Html::img('/img/'.$categories->image,['style' => ['max-height'=>'40px','max-width' => '30px'] ,
                        'class' => 'img img-responsive',
                        'style' => [
                            'border-radius'=>'15px',
                            'max-height' => '180px',
                            'max-width' => '150px',
                        ]]);
                }
            ],
        ],
    ]) ?>

</div>
