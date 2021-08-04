<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToTableRecruitmentPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recruitment_posts', function (Blueprint $table) {
            $table->tinyInteger('company')->default(0);
            $table->tinyInteger('type');
            $table->string('location')->nullable();
            $table->string('department');
            $table->string('timework');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recruitment_posts', function (Blueprint $table) {
            $table->dropColumn(['company', 'type', 'location', 'department', 'timework']);
        });
    }
}
