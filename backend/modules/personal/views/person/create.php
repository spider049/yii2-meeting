<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = 'เพิ่มบุคลากร';
$this->params['breadcrumbs'][] = ['label' => 'บุคลากร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-users"></i><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">        

        <?=
        $this->render('_form', [
            'model' => $model,
            'user' => $user,
        ])
        ?>

    </div>
</div>
