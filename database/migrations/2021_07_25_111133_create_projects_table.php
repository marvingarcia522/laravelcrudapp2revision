<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('output', 255)->nullable();
            $table->string('indicator', 255)->nullable();
            $table->string('accomplishment', 500)->nullable();
            $table->float('ratingq1',22,4)->nullable()->default(0.0000);
            $table->float('ratinge2',22,4)->nullable()->default(0.0000);
            $table->float('ratingt3',22,4)->nullable()->default(0.0000);
            $table->string('remarks')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
