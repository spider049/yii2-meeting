<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\meeting\models\EquipmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'อุปกรณ์ห้องประชุม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-danger box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-cogs"></i> รายการอุปกรณ์ทั้งหมด</h3>
    </div>
    <div class="box-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('เพิ่มอุปกรณ์', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'id',
                [
                    'attribute' => 'photo',
                    'format' => 'html',
                    'value' => function ($model) {
                        return Html::img('uploads/equipment/'.$model->photo, ['class' => 'img-responsive', 'width'=>80]);
                    }
                ],
                // ทำลิ้ง หน้ารายการ ไปแสดง
                [
                    'attribute' => 'equipment',
                    'format' => 'html',
                    'value' => function ($model) {
                        return Html::a($model->equipment, $url = ['view', 'id' => $model->id]);
                    }
                ],
                
              
                        
                'description:ntext',
                //'photo',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>
