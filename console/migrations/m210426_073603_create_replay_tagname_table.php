<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%replay_tagname}}`.
 */
class m210426_073603_create_replay_tagname_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%replay_tagname}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->text(),
            'question_id'=>$this->text(),
            'answer'=>$this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%replay_tagname}}');
    }
}
