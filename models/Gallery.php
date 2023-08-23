<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $gallery_id
 * @property string $photo
 */
class Gallery extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'gallery';
    }

    public function rules()
    {
        return [
            [['photo_date', 'mesto'], 'required'],
            [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg',],
            [['mesto'], 'string', 'max' => 255],
            [['mesto'], 'match', 'pattern' => '/^[а-яА-ЯёЁ\s]+$/u', 'message' => 'Разрешено исползовать только кириллицу и пробел'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'gallery_id' => 'Gallery ID',
            'photo' => 'Фотография',
            'photo_date' => 'Дата фотографии',
            'mesto' => 'Место фотографии',
        ];
    } 
}
