<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',

    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'number',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'product_id',
        'contentOptions' => ['style' => 'width: 300px;', 'class' => ''],
        'label' => 'Продукт',
        'value' => function($data) {
            $categories=\common\models\Products::find()->where(['id' => $data->product_id ])->one();
            return  $categories->name;
        },
        'format' => 'html',
    ],
    [
        'attribute'=>'product_id',
        'label' => 'Фото',
        'contentOptions' => ['style' => [
            'width' => '120px'
        ]],
        'format' => 'html',
        'value' => function($data){
            $categories=\common\models\Products::find()->where(['id' => $data->product_id ])->one();

            return Html::img('/img/'.$categories->image,['style' => ['max-height'=>'40px','max-width' => '30px'] ,
                'class' => 'img img-responsive',
                'style' => [
                    'border-radius'=>'5px',
                    'max-height' => '130px',
                    'max-width' => '110px',
                ]]);
        }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'date',
    ],

    [
        'class' => 'kartik\grid\ActionColumn',
        'template' => '{view} {delete}',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   