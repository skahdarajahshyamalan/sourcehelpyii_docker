<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "replay_tagname".
 *
 * @property int $id
 * @property string|null $user_id
 * @property string|null $question_id
 * @property string|null $answer
 */
class ReplayTagname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'replay_tagname';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'answer'], 'string'],
            [['user_id'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'question_id' => 'Question ID',
            'answer' => 'Answer',
        ];
    }
}
