<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Takimlar */

$this->title = 'Update Takimlar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Takimlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="takimlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
