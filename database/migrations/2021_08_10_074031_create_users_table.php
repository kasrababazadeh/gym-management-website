<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('code-melli')->unique();
            $table->bigInteger('phone-number');
            $table->string('gender');
            $table->string('password');
            $table->string('telegram-code')->nullable();
            $table->integer('membership-period')->nullable();
            $table->boolean('status')->nullable();
            $table->date('membership-date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
