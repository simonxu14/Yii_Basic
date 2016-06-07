<?php

use yii\db\Migration;

/**
 * Handles the creation for table `news_table`.
 */
class m160607_141027_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news_table', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news_table');
    }
}
