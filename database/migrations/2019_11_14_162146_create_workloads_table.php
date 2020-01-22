<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workloads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('job');
            $table->string('hours');
            $table->string('developed_activity');

            // Details
            for($i=1; $i==20; $i++){
                $table->string('activity_'.$i);
                $table->enum('priority_'.$i, ['Alta', 'Media', 'Baja', 'Urgente']);
                $table->enum('frecuency_'.$i, [
                    'Diario',
                    'Semanal',
                    'Quincenal',
                    'Mensual',
                    'Bimestral',
                    'Semestral',
                    'Anual',
                    'Otra'
                ]);
                
                $table->integer('repetitions_'.$i);
                $table->integer('minutes_'.$i);
                $table->integer('total_time_'.$i);

            }



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
        Schema::dropIfExists('workloads');
    }
}
