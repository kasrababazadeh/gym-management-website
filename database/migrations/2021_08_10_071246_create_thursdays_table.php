<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThursdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thursdays', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user-code-melli')->unsigned();
            $table->string('first-exercise');
            $table->string('first-exercise-number');
            $table->string('second-exercise');
            $table->string('second-exercise-number');
            $table->string('third-exercise');
            $table->string('third-exercise-number');
            $table->string('forth-exercise')->nullable();
            $table->string('forth-exercise-number')->nullable();
            $table->string('fifth-exercise')->nullable();
            $table->string('fifth-exercise-number')->nullable();
            $table->string('sixth-exercise')->nullable();
            $table->string('sixth-exercise-number')->nullable();
            $table->string('seventh-exercise')->nullable();
            $table->string('seventh-exercise-number')->nullable();
            $table->string('eighth-exercise')->nullable();
            $table->string('eighth-exercise-number')->nullable();
            $table->timestamps();
            $table->foreign('user-code-melli')->references('code-melli')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thursdays');
    }
}
