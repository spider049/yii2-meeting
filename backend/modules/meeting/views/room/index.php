<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\meeting\models\RoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ห้องประชุม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-warning box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-home"></i> ห้องทั้งหมด</h3>
    </div>
    <div class="box-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('เพิ่มห้อง', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'id',
                [
                    'attribute' => 'color',
                    'format' => 'html',
                    'value' => function ($model){
                        return Html::img('uploads/room/'.$model->photo, ['class' => 'img-responsive', 'width' =>250]);
                    },
                ],
                //'name',
                [
                    'attribute' => 'name',
                    'format' => 'html',
                    'value' => function ($model) {
                        return Html::a($model->name, $url = ['view', 'id' => $model->id]);
                    }
                ],
                //'description:ntext',
                //'photo',
                //'color',
                [
                    'attribute' => 'color',
                    'format' => 'html',
                    'value' => function ($model) {
                        return '<span style="color:'.$model->color.'">'.$model->color.'</span>';
                    }
                ],
                        
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>
