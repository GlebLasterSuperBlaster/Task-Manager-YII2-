<?php

use yii\db\Migration;

/**
 * Class m190519_223006_forenkeys
 */
class m190519_223006_forenkeys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fx_task_executor_id_user_id', 'task', ['executor_id'], 'user', ['id']);
        $this->addForeignKey('fx_task_creator_id_user_id', 'task', ['creator_id'], 'user', ['id']);
        $this->addForeignKey('fx_task_updater_id_user_id', 'task', ['updater_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_creator_id_user_id', 'project', ['creator_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_updater_id_user_id', 'project', ['updater_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_user_id_user_id', 'project_user', ['user_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_user_project_id_project_id', 'project_user', ['project_id'], 'project', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_task_executor_id_user_id', 'task');
        $this->dropForeignKey('fx_task_creator_id_user_id', 'task');
        $this->dropForeignKey('fx_task_updater_id_user_id', 'task');
        $this->dropForeignKey('fx_project_creator_id_user_id', 'project');
        $this->dropForeignKey('fx_project_updater_id_user_id', 'project');
        $this->dropForeignKey('fx_project_user_id_user_id', 'user');
        $this->dropForeignKey('fx_project_user_project_id_project_id', 'project');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190519_223006_forenkeys cannot be reverted.\n";

        return false;
    }
    */
}
