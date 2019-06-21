<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBansTable extends Migration
{

    /**
     * Main table associated with this migration.
     */
    const TABLE = 'user_bans';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ban-id'); // a 8 char generated id
            $table->string('banner-id'); // staff that issued ban
            $table->string('identifier'); // player banned
            $table->string('reason'); // why player was banned
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
