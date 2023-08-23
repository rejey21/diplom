<?php

namespace app\models;

use Yii;
use app\models\Club;

/**
 * This is the model class for table "attendance".
 *
 * @property int $attendance_id
 * @property string $name
 * @property string $attendance_date
 */
class Attendance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attendance';
    }
    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_attendance', 'reason','attendance_date'], 'required'],
            [['attendance_date'], 'safe'],
            [['name_attendance','reason'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'attendance_id' => 'Attendance ID',
            'name_attendance' => 'ФИО',
            'reason' => 'Причина отсутствия',
            'attendance_date' => 'Дата отметки',
        ];
    }
}
