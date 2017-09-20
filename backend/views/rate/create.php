<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RateItem */

$this->title = 'Create Rate Item';
$this->params['breadcrumbs'][] = ['label' => 'Rate Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rate-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
