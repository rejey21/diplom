<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matches".
 *
 * @property int $match_id
 * @property string $match_date
 * @property string $score
 * @property string $team1
 * @property string $team2
 * @property string $tournament
 */
class Matches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['match_date', 'score', 'team1', 'team2', 'tournament', 'match_status'], 'required', 'message' => 'Необходимо запоолнить поле'],
            [['match_date'], 'safe'],
            [['score', 'team1', 'team2', 'tournament'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'match_id' => 'Match ID',
            'match_date' => 'Дата матча',
            'score' => 'Счёт',
            'team1' => 'Дома',
            'team2' => 'В гостях',
            'tournament' => 'Турнир',
            'match_status' => 'Статус матча',
        ];
    }
}
