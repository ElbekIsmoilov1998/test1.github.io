<?php
use yii\helpers\Url;
use common\models\Category;
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
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
    ],
//    [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'number',
//    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'price',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'category_id',
        'label' => 'Категория',
        'value' => function($data) {
            $categories=Category::find()->where(['id' => $data->category_id ])->one();

            return $data->category_id == 0 ? '<span class="label label-success">Активен</span>' : $categories->name;
        },
        'format' => 'html',
    ],


    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute' => 'status',
        'value' => function($data) {
            return $data->status == 1 ? '<span class="label label-success">Активен</span>' : '<span class="label label-danger">Не активен</span>';
        },
        'format' => 'html',
    ],

    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'Посмотреть','data-toggle'=>'tooltip'],
//        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Удалить',
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   