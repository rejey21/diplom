<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "achivments".
 *
 * @property int $achivments_id
 * @property string $achive
 */
class Achivments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'achivments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['achive'], 'required'],
            [['achive'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'achivments_id' => 'Achivments ID',
            'achive' => 'Достижение',
        ];
    }
}
