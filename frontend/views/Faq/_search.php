<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Faqsearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faq-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1,
            'class' =>'form-inline'
        ],
    ]); ?>
    <?= $form->field($model, 'tagname',['options' => ['class' => 'ml-auto']],[ 'labelOptions' => [ 'class' => 'sr-only' ]])?>
    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    

    <?php ActiveForm::end(); ?>

</div>
