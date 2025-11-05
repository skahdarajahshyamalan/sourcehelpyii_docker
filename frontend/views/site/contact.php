<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
/*INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(7, 'R R Home Designer', 'f3pdruontU29uRTWCl_iY0YU5lSgP0UF', '', NULL, 'rrhomedesigner@gmail.com', 10, 1619086133, 1619086133, '$2y$10$oY1KWks9mfcViJHO9H2xnOlon5ic2wQOnRaJkY1TTZThb0VA4FiGO'),
(9, 'shyamalantest', 'FZn0wKhUtX-dt9zZN2giPNaN8aa0XYF9', '$2y$13$rE93w/6QIF3Rnxm3wY32H.6FEQy9olbnRavVjRkqlUQrgA8iWXG.2', NULL, 'shyamalan198688@gmail.com', 10, 1619086245, 1619086341, 'mJOsC0Iblh1bZTwZ2qFt3xsMTrnAFkNE_1619086245');
 */
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
//UserID ='QuestionID' =>array(123)
<?php
 $answerarray = array('uid'=>array(88),'answer'=>array('444'),'pomision'=>array(1));
 echo '<pre>';
 print_r($answerarray);
?>
