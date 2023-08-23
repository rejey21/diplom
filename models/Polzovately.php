<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "polzovately".
 *
 * @property int $id
 * @property string $username
 * @property string $user_password
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $created_at
 * @property int $updated_at
 */
class Polzovately extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'polzovately';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email','name_polzovatel'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['username', 'user_password', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_polzovatel' => 'ФИО',
            'username' => 'Username',
            'user_password' => 'User Password',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Почта',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
