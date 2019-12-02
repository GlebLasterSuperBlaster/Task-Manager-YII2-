<?php

use yii\db\Migration;

/**
 * Class m190519_211219_first
 */
class m190519_211219_first extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string()->notNull(),
            'description'=>$this->text()->notNull(),
            'project_id'=>$this->integer()->Null(),
            'executor_id'=>$this->integer()->Null(),
            'started_at'=>$this->integer()->Null(),
            'completed_at'=>$this->integer()->Null(),
            'creator_id'=>$this->integer()->notNull(),
            'updater_id'=>$this->integer()->Null(),
            'created_at'=>$this->integer()->notNull(),
            'updated_at'=>$this->integer()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('task');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190519_211219_first cannot be reverted.\n";

        return false;
    }
    */
}
