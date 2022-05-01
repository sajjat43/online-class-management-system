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
            $table->string('user_id');
            $table->string('gender');
            $table->date('birth')->nullable();
            $table->double('class_id')->nullable();
            $table->double('payment')->nullable();
            $table->foreignId('subject_id')->nullable();
            $table->date('join')->nullable();
            $table->double('mobile')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->default('pending');
            $table->string('role', 20)->default('user');
            $table->string('father_name')->nullable();
            $table->double('father_mobile')->nullable();
            $table->string('mother_name')->nullable();
            $table->double('mother_mobile')->nullable();
            $table->string('address');
            $table->string('image');
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
