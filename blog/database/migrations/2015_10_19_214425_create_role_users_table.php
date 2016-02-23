<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUsersTable extends Migration
{
    /**
         * Run the migrations.
         */
        public function up()
        {
            Schema::create('role_users', function (Blueprint $table) {
                $table->integer('user_id');
                $table->integer('role_id');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down()
        {
            Schema::drop('role_users');
        }
}
