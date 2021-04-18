<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToWarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warnings', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warnings', function (Blueprint $table) {
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');      
          });
    }
}
