<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matches_home".
 *
 * @property int $team_home_id
 * @property string $team_home
 */
class MatchesHome extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matches_home';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_home'], 'required'],
            [['team_home'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'team_home_id' => 'Team Home ID',
            'team_home' => 'Team Home',
        ];
    }
}
