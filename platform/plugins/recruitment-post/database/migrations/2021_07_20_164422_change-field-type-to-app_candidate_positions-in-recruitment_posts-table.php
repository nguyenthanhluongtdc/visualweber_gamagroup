<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldTypeToAppCandidatePositionsInRecruitmentPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recruitment_posts', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->unsignedBigInteger('candidate_position_id')->nullable()->comment('ID vị trí tuyển dụng');
            $table->foreign('candidate_position_id')->references('id')->on('app_candidate_positions')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
