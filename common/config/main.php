<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'smartMeeting',   // ฃื่อ Application Override ชื่อ name หน้าใหนที่มี name ก็จะเปลี่ยน Yii::$app->name
    'language' => 'th_TH',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
