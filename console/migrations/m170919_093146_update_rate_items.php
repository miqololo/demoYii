<?php

use yii\db\Migration;

class m170919_093146_update_rate_items extends Migration
{
    public function safeUp()
    {
        $this->addColumn('rate_items', 'created_at', $this->integer()->notNull());
    }

    public function safeDown()
    {
        $this->dropColumn('rate_items', 'created_at');
    }

}
