<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformanceReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance_reports', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('progress');
            $table->decimal('expenses', 10, 2);
            $table->decimal('revenues', 10, 2);

            $table->foreignId('project_id')
                ->constrained('projects');
            
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
        Schema::dropIfExists('performance_reports');
    }
}
