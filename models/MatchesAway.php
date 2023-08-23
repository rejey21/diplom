<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matches_away".
 *
 * @property int $team_away_id
 * @property string $team_away
 */
class MatchesAway extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matches_away';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_away'], 'required'],
            [['team_away'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'team_away_id' => 'Team Away ID',
            'team_away' => 'Team Away',
        ];
    }
}
