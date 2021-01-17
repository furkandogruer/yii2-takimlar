<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sonuclar */

$this->title = 'Update Sonuclar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sonuclars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sonuclar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
