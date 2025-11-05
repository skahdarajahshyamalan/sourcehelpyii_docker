<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Faq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faq-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tagname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'discription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'question_idlist')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
