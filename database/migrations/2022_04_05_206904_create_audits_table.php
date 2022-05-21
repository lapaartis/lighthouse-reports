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
        Schema::create('audits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id');
            $table->string('name');
            $table->text('urls');
            $table->boolean('accessibility')->default(false);
            $table->boolean('best_practices')->default(false);
            $table->boolean('performance')->default(false);
            $table->boolean('pwa')->default(false);
            $table->boolean('seo')->default(false);
            $table->json('headers')->nullable();
            $table->unsignedInteger('timeout')->default(60);
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audits');
    }
};
