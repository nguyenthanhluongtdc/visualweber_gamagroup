<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToTableAppServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_services', function (Blueprint $table) {
            $table->tinyInteger('is_featured')->default(0);
            $table->string('description', 400)->nullable();
            $table->longText('content')->nullable();
            $table->string('image', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_services', function (Blueprint $table) {
            $table->dropColumn(['is_featured', 'description', 'content', 'image']);
        });
    }
}
