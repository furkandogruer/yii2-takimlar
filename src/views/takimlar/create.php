<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Takimlar */

$this->title = 'Create Takimlar';
$this->params['breadcrumbs'][] = ['label' => 'Takimlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takimlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
