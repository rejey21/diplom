<?php

namespace app\models;

use Yii;
use app\models\Polzovately;
/**
 * This is the model class for table "club".
 *
 * @property int $id_club
 * @property string $name
 * @property string $position
 * @property string $nationality
 * @property string $image
 */
class Club extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'club';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'position', 'height','date_birth', 'image'], 'required'],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg',],
            [['name', 'position', 'player_achive','date_birth'], 'string', 'max' => 255],
            [['height'], 'match', 'pattern' => '/^[0-9]+$/u', 'message' => 'Можно использовать только цифры'],
            ['height', 'string', 'min' => 3,'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_club' => 'Id Club',
            'name' => 'ФИО',
            'player_achive' => 'Достижения',
            'position' => 'Позиция',
            'height' => 'Рост',
            'date_birth' => 'Дата рождения',
            'image' => 'Фотография',
        ];
    }
}
