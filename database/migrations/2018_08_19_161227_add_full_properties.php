<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFullProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name','user_name')->unique();
            $table->string('first_name')->after('remember_token');
            $table->string('last_name')->after('first_name');
            $table->date('birth_day')->after('last_name');
            $table->string('post_code')->after('birth_day');
            $table->integer('country')->after('post_code');
            $table->string('city')->after('country');
            $table->string('address')->after('city');
            $table->integer('phone')->after('address');
            $table->integer('mobile')->after('phone');
            $table->boolean('sex')->after('mobile');
            $table->tinyInteger('user_role')->after('sex');
            $table->boolean('del_flg')->after('user_role');
            $table->boolean('user_status')->after('del_flg');
            $table->integer('created_by')->after('user_status');
            $table->integer('updated_by')->after('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('birth_day');
            $table->dropColumn('post_code');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('mobile');
            $table->dropColumn('sex');
            $table->dropColumn('user_role');
            $table->dropColumn('del_flg');
            $table->dropColumn('user_status');
            $table->dropColumn('created_by');
            $table->dropColumn('updated_by');
        });
    }
}
