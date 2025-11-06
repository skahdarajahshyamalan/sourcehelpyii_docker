<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $auto
 * @property string|null $heading
 * @property string|null $pagname
 * @property string|null $discription
 * @property string|null $questionid
 * @property string|null $tagname
 * @property string|null $tag
 * @property string|null $site
 * @property int|null $status
 * @property int|null $has_thumbnail
 * @property string|null $questionlinkurl
 * @property string|null $suggestedAnswerlist
 * @property int $User_id
 * @property string|null $question_link
 * @property string|null $acceptedAnswerlist
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 */
class FaqQuestion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * {@inheritdoc}
     */
    public static function primaryKey()
    {
        return ['auto'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['User_id'], 'required'],
            [['status', 'has_thumbnail', 'User_id', 'created_at', 'updated_at', 'created_by'], 'integer'],
            [['heading', 'pagname', 'discription', 'questionid', 'tagname', 'tag', 'site', 'questionlinkurl', 'suggestedAnswerlist', 'question_link', 'acceptedAnswerlist'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'auto' => 'ID',
            'heading' => 'Heading',
            'pagname' => 'Pagname',
            'discription' => 'Discription',
            'questionid' => 'Questionid',
            'tagname' => 'Tagname',
            'tag' => 'Tag',
            'site' => 'Site',
            'status' => 'Status',
            'has_thumbnail' => 'Has Thumbnail',
            'questionlinkurl' => 'Questionlinkurl',
            'suggestedAnswerlist' => 'Suggested Answerlist',
            'User_id' => 'User ID',
            'question_link' => 'Question Link',
            'acceptedAnswerlist' => 'Accepted Answerlist',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }
}

