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
        Schema::create('user_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('con_number')->nullable();
            $table->string('address')->nullable();
            $table->string('major')->nullable();
            $table->string('education')->nullable();
            $table->string('teaching_exp')->nullable();
            $table->string('st_skills')->nullable();
            $table->string('interview')->nullable();
            $table->string('demo_teach')->nullable();
            $table->string('out_achiev')->nullable();
            $table->string('comm_skills')->nullable();
            $table->string('let_pbet')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('user_grades');
    }
};
