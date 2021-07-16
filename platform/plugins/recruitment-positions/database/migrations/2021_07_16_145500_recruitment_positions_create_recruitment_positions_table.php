<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RecruitmentPositionsCreateRecruitmentPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_recruitment_positions', function (Blueprint $table) {
            $table->id();
            $table->string('job', 255);
            $table->string('company', 255);
            $table->string('address');
            $table->time('expiration_date');
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
        Schema::dropIfExists('app_recruitment_positions');
    }
}
