<?php

use yii\db\Migration;

class m170920_045407_add_update_collumn extends Migration
{

    public function safeUp()
    {
        $this->addColumn('rate_items', 'updated_at', $this->integer()->notNull());
    }

    public function safeDown()
    {
        $this->dropColumn('rate_items', 'updated_at');
    }
}
