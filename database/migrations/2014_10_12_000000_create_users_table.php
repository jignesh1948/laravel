<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('age')->nullable();
            $table->date('dob')->nullable();
            $table->integer('phone');
            $table->integer('religion')->nullable();
            $table->integer('country')->nullable();
            $table->integer('state')->nullable();
            $table->integer('city')->nullable();
            $table->integer('profile_by')->nullable();
            $table->integer('education')->nullable();
            $table->integer('body_type')->nullable();
            $table->integer('marital_status')->nullable();
            $table->integer('height')->nullable();
            $table->integer('physical_status')->nullable();
            $table->integer('drink')->nullable();
            $table->integer('mother_tongue')->nullable();
            $table->integer('complexion')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('blood_group')->nullable();
            $table->integer('sub_caste')->nullable();
            $table->integer('diet')->nullable();
            $table->integer('smoke')->nullable();
            $table->integer('annual_income')->nullable();
            $table->string('education_detail')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('brothers')->nullable();
            $table->string('sisters')->nullable();
            $table->string('occupation')->nullable();
            $table->string('birth_place');
            $table->string('raasi');
            $table->time('time_of_birth')->nullable();
            $table->longText('description')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
