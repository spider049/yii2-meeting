<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $photo
 * @property string $address
 * @property string $tel
 * @property integer $department_id
 *
 * @property Meeting[] $meetings
 * @property Department $department
 * @property User $user
 */
class Person extends \yii\db\ActiveRecord
{
    public $person_img;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'firstname', 'lastname', 'department_id'], 'required'],
            [['user_id', 'department_id'], 'integer'],
            [['address'], 'string'],
            [['firstname', 'lastname', 'photo'], 'string', 'max' => 100],
            [['tel'], 'string', 'max' => 45],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['person_img'], 'file', 'skipOnEmpty' => true, 'on' => 'update', 'extensions' => 'jpg,png,gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'firstname' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            //'photo' => 'รูปภาพบุคคล',
            'address' => 'ที่อยู่',
            'tel' => 'เบอร์โทร',
            'department_id' => 'ฝ่าย',
            'person_img' => 'รูปภาพบุคคล'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeetings()
    {
        return $this->hasMany(Meeting::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
