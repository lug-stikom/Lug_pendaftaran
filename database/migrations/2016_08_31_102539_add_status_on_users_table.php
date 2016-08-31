<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->increments('id');
            // $table->timestamps();
            $table->integer('member_id');
            $table->enum('status', ['active', 'inactive']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainer', function (Blueprint $table) {
          //
          $table->dropColumn('id_member');
          $table->dropColumn('status');
        });
    }
}
