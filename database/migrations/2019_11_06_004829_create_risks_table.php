<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->enum('gender', ['Masculino', 'Femenino']);
            $table->string('occupation');
            $table->string('type_of_contract');
                
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->float('calification')->nullable();
            
            // Categorias
            $table->float('ambiente_trabajo')->nullable();
            $table->float('factores_propios')->nullable();
            $table->float('organizacion_tiempo')->nullable();
            $table->float('liderazgo_trabajo')->nullable();
            // Dominio
            $table->float('condiciones_ambiente')->nullable();
            $table->float('carga_trabajo')->nullable();
            $table->float('falta_control')->nullable();
            $table->float('jornada_trabajo')->nullable();
            $table->float('trabajo_familia')->nullable();
            $table->float('liderazgo')->nullable();
            $table->float('relaciones_trabajo')->nullable();
            $table->float('violencia')->nullable();
            $table->float('reconocimiento_desempeño')->nullable();
            $table->float('insuficiente_sentido')->nullable();
            
            for($i=1; $i<=46; $i++){
                $table->string('question_'.$i);
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
        Schema::dropIfExists('risks');
    }
}
