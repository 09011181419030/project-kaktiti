<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sendmail */

$this->title = 'Update Sendmail: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sendmails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sendmail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
