<?php

use common\models\Products;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$category = \common\models\Category::find()->where(['id' => $product->category_id])->one();
/* @var $this yii\web\View */
/* @var $model common\models\Customer */
/* @var $form yii\widgets\ActiveForm */



?>

<div class="customer-form">
    <?php $form = ActiveForm::begin(); ?>
    <section class="content pb-4">
        <div class="container">
            <div class="checkout">
                <div id="checkout_pjax" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                            <div id="step-0" class="container">

                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8 col-md-12 white-bg pt-4 pb-4">


                                        <h3 class="w3ls-title text-center">Заполните ваши контактные данные</h3>
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10 col-md-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group field-checkoutform-first_name required">
                                                            <?= $form->field($model, 'name')->textInput(['rows' => 1, 'class' => 'form-control'])->label('Как к Вам можно обращаться?',[ 'class'=> 'control-label']) ?>
                                                            <p class="help-block help-block-error text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group field-checkoutform-phone required">
                                                            <?= $form->field($model, 'number')->textInput(['maxlength' => true, 'class' => 'form-control'])->label('Номер телефона для контакта',[ 'class'=> 'control-label']) ?>
                                                            <p class="help-block help-block-error text-danger"></p>
                                                        </div>
                                                    </div>
                                                    <?= $form->field($model, 'product_id')->textInput(['maxlength' => true])->hiddenInput(['value' => $product->id])->label(false); ?>

                                                    <div class="form-group w-100">
                                                        <?= Html::submitButton(Yii::t('app', 'Перейти к оплате'), ['class' => 'btn btn-primary w-100']) ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="product-chekout basket-items">
                                                <div class="row"><div class="col-sm-3">
                                                        <div class="prod-img img-100-auto">
                                                            <a class="item" href="<?= \yii\helpers\Url::to(['products/view/?id=' . $product['id']])?>" data-pjax="0">
                                                                <?php echo Html::img('@web/img/'.$product->image, ['class' => 'img-responsive']) ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9"><div class="prod-txt">

                                                            <p class="ccc"><b>Категория:</b> <?php echo $category->name?></p>
                                                            <p><b>Товар</b>: <?php echo $product->name ?></p>
                                                            <p><b>Цена:</b> <?php echo $product->price ?> / шт</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>


    <?php ActiveForm::end(); ?>

</div>




