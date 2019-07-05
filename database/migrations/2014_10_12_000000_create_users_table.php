<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Main table associated with this migration.
     */
    const TABLE = 'webpanel_users';

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
            $table->string('username');
            $table->string('avatar'); // an avatar (profile picture)

            // Roles and permission.
            $table->boolean('super_admin'); // whether they're a superadmin
            $table->unsignedInteger('role_id')->nullable();

            // Tokens and timestamps.
            $table->rememberToken();
            $table->timestamps();

            // Keys
            // $table->foreign('identifier')->references('identifier')->on('players');
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
