<?php

namespace backend\modules\meeting\models;
namespace common\models;

use Yii;

/**
 * This is the model class for table "meeting".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $date_start
 * @property string $date_end
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property integer $room_id
 * @property integer $user_id
 *
 * @property Person $user
 * @property Room $room
 * @property Uses[] $uses
 * @property Equipment[] $equipment
 */
class Meeting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meeting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'description', 'date_start', 'date_end', 'room_id', 'user_id'], 'required'],
            [['id', 'room_id', 'user_id'], 'integer'],
            [['description', 'status'], 'string'],
            [['date_start', 'date_end', 'created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 45],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Person::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'เรื่อง',
            'description' => 'รายละเอียด',
            'date_start' => 'เริ่ม',
            'date_end' => 'สิ้นสุด',
            'created_at' => 'เพิ่มเมื่อ',
            'updated_at' => 'แก้ไขเมื่อ',
            'status' => 'สถานะการจอง',
            'room_id' => 'ห้องประชุม',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Person::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUses()
    {
        return $this->hasMany(Uses::className(), ['meeting_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipment()
    {
        return $this->hasMany(Equipment::className(), ['id' => 'equipment_id'])->viaTable('uses', ['meeting_id' => 'id']);
    }
}
