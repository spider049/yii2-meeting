<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Equipment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-danger box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-cogs"></i> อุปกรณ์ห้องประชุม</h3>
    </div>
    <div class="box-body">

        <?php
        $form = ActiveForm::begin([
                    'options' => ['enctype' => 'multipart/form-data']
        ]);
        ?>

        <?= $form->field($model, 'equipment')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        
        <?= $form->field($model, 'equip_img')->fileInput() ?>

        <?php if (!$model->isNewRecord) { ?>
            <?= Html::img('uploads/equipment/' . $model->photo, ['class' => 'img-responsive', 'width' => 150]); ?>
            <?php
        }
        ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
