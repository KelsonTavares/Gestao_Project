<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risk_management', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('mitigation_strategy');
            $table->integer('probability');
            $table->integer('impact');

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
        Schema::dropIfExists('risk_management');
    }
}
