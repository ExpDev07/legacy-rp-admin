<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{

    /**
     * Main table associated with this migration.
     */
    const TABLE = 'user_logs';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier');
            $table->string('action'); // action that occurred
            $table->longText('details'); // more details
            $table->json('metadata'); // additional metadata
            $table->timestamp('timestamp'); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE);
    }
}
