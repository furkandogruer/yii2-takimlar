<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sonuclar */

$this->title = 'Create Sonuclar';
$this->params['breadcrumbs'][] = ['label' => 'Sonuclars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sonuclar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
