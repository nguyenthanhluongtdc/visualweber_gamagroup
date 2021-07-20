<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CandidatePositionCreateCandidatePositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_candidate_positions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('Tên vị trí ứng tuyển');
            $table->text('description')->nullable()->comment('Mô tả vị trí ứng tuyển nếu có');
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
        Schema::dropIfExists('app_candidate_positions');
    }
}
