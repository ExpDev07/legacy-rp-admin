<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{

    /**
     * Main table associated with this migration.
     */
    const TABLE = 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            // User related.
            $table->bigIncrements('id');
            $table->string('identifier');
            $table->string('name');
            $table->json('identifiers');
            $table->integer('playtime');
            $table->timestamp('seen');

            // Characters.
            $table->integer('cid1')->nullable();
            $table->integer('cid2')->nullable();
            $table->integer('cid3')->nullable();
            $table->integer('cid4')->nullable();

            // Staff related.
            $table->string('staff')->nullable(); // staff id

            // Keys
            // $table->foreign('identifier')->references('identifier')->on('characters');
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
