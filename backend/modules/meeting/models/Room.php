<?php

namespace backend\modules\meeting\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $photo
 * @property string $color
 *
 * @property Meeting[] $meetings
 */
class Room extends \yii\db\ActiveRecord
{
    public $room_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'color'], 'required'],
            [['description'], 'string'],
            [['name', 'photo'], 'string', 'max' => 100],
            [['color'], 'string', 'max' => 7],
            [['room_img'], 'file', 'skipOnEmpty' => true, 'on' => 'update', 'extensions' => 'jpg,png,gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อห้อง',
            'description' => 'รายละเอียด',
            'photo' => 'รูปประจำห้อง',
            'color' => 'สีห้อง',
            'room_img' => 'รูปภาพ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeetings()
    {
        return $this->hasMany(Meeting::className(), ['room_id' => 'id']);
    }
}
