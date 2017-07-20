<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


<br>

<div class="container">   
            <div class="row">   
                <div class="col-lg-12">
                    <div class="contact-form" >
                        <h2 class="title text-center" >Contact Us</h2>
                        <div  style="display: none"></div>



                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

               

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>

                    </div>
                </div>
              </div>







