<?php

use yii\db\Migration;

/**
 * Class m190519_215226_second
 */
class m190519_215226_second extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project',[
            'id'=>$this->primaryKey(),
            'title'=>$this->string()->notNull(),
            'description'=>$this->text()->notNull(),
            'active'=>$this->boolean()->notNull()->defaultValue(0),
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
        $this->dropTable('project');
            return true;
        }

        /*
        // Use up()/down() to run migration code without a transaction.
        public function up()
        {

        }

        public function down()
        {
            echo "m190519_215226_second cannot be reverted.\n";

            return false;
        }
        */
}
