<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Equipment */

$this->title = 'แก้ไขอุปกรณ์: ' . $model->equipment;
$this->params['breadcrumbs'][] = ['label' => 'อุปกรณ์ห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->equipment, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="equipment-update">    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
