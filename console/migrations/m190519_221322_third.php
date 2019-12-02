<?php

use yii\db\Migration;

/**
 * Class m190519_221322_third
 */
class m190519_221322_third extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        {
            $this->createTable('project_user',[
                'id'=>$this->primaryKey(),
                'project_id'=>$this->integer()->notNull(),
                'user_id'=>$this->integer()->notNull(),
                'role'=>$this->string()->defaultValue('manager', 'developer', 'tester'),
            ]);
        }
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
        echo "m190519_221322_third cannot be reverted.\n";

        return false;
    }
    */
}
