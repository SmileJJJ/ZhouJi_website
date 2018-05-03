<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('姓名');
            $table->integer('性别')->unsigned()->default(10);
            $table->integer('出生年月日')->default(0);
            $table->string('邮箱')->default(123456789);
            $table->string('学历')->default(123456789);
            $table->integer('身份证')->unsigned()->default(123456789);
            $table->integer('联系方式')->unsigned()->default(123456789);
            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
