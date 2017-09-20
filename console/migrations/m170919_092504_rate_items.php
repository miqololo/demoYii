<?php

use yii\db\Migration;

class m170919_092504_rate_items extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%rate_items}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'key' => $this->string(32)->notNull(),
            'value' => $this->float()->notNull(),
            'description' => $this->string()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%rate_items}}');
    }
}
