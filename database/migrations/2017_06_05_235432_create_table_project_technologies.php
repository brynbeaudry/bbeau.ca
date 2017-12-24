<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjectTechnologies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {
            $table->integer('technology_id')->unsigned();
            $table->foreign('technology_id')
            ->references('id')->on('technologies')
            ->onDelete('cascade');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')
            ->references('id')->on('projects')
            ->onDelete('cascade');
            $table->primary(['project_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technologies');
    }
}
