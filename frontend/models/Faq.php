<?php

namespace frontend\models;
use common\models\User;
use Yii;

/**
 * This is the model class for table "tagnamelist".
 *
 * @property int $id
 * @property string|null $tagname
 * @property string|null $discription
 * @property string|null $question_idlist
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 *
 * @property User $createdBy
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagnamelist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tagname', 'discription', 'question_idlist'], 'string'],
            [['created_at', 'updated_at', 'created_by'], 'integer'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tagname' => 'Tagname',
            'discription' => 'Discription',
            'question_idlist' => 'Question Idlist',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
