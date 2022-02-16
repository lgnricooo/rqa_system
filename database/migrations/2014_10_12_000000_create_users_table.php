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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('newold')->nullable();
            $table->string('retain')->nullable();
            $table->string('ept')->nullable();
            $table->string('ept_date')->nullable();
            $table->string('unique_code')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('alt_email')->nullable();
            $table->string('con_number')->nullable();
            $table->string('address')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('minor')->nullable();
            $table->string('level')->nullable();
            $table->string('district')->nullable();
            $table->string('school')->nullable();
            $table->integer('role')->nullable();
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
};
