<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Equipment */

$this->title = 'อุปกรณ์ห้องประชุม';
$this->params['breadcrumbs'][] = ['label' => 'อุปกรณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


        

        <?=
        $this->render('_form', [
            'model' => $model,
        ])
        ?>

    </div>
