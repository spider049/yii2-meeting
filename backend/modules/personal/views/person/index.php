<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Department;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\personal\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'บุคลากร';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-users"></i><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="box-body">

        <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

        <p>
            <?= Html::a('เพิ่มบุคลากร', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'photo',
                    'format' => 'html',
                    'value' => function ($model) {
                        return Html::img('uploads/person/'.$model->photo, ['class' => 'img-responsive', 'width'=>150]);
                    }
                ],
                'user.username',
                'firstname',
                'lastname',
                //'address:ntext',
                'tel',
                [
                    'attribute' => 'department_id',
                    'value' => function($model) {
                        return $model->department->department;
                    },
                    'filter' => Html::activeDropDownList($searchModel, 'department_id', ArrayHelper::map(Department::find()->all(), 'id', 'department'), ['class' => 'form-control']),
                ],
                //'department.department',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>
