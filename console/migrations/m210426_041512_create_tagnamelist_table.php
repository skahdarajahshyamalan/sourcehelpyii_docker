<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tagnamelist}}`.
 */
class m210426_041512_create_tagnamelist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tagnamelist}}', [
            'id' => $this->primaryKey(),
            'tagname' => $this->text(),
            'heading' => $this->text(),
            'discription'=>$this->text(),
            'question_idlist'=>$this->text(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
        ]);
        // add foreign key for table `{{%user}}`
            $this->addForeignKey(
            '{{%fk-tagnamelists-created_by}}',
            '{{%tagnamelist}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tagnamelist}}');
    }
}
