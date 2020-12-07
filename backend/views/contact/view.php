<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */
?>
<div class="contact-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            'email:email',
            'subject:ntext',
            'body:ntext',
        ],
    ]) ?>

</div>
