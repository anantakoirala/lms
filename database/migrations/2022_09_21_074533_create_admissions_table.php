<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('roll_no');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->longText('address')->nullable();
            $table->longText('current_address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport')->nullable();
            $table->tinyInteger('status');
            $table->date('dateregistered')->nullable();
            $table->integer('user_id');
            $table->integer('class_id');
            $table->string('image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('admissions');
    }
};
