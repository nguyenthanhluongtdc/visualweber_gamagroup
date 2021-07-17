<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RecruitmentPostCreateRecruitmentPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('experience');
            $table->text('describe');
            $table->text('Responsibility');
            $table->string('expire');
            $table->string('status', 60)->default('published');
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
        Schema::dropIfExists('recruitment_posts');
    }
}
