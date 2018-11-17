<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Sendmail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sendmail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lecturer_id')->widget(Select2::classname(), [
        'data' => $lecturer,
        'options' => ['placeholder' => 'Select a Lecturer ...', 'multiple' => true],
        'pluginOptions' => [
            'tags' => true,
            'tokenSeparators' => [',', ' '],
            'maximumInputLength' => 10
        ],
        
    ])->label('Lecturer List'); ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
