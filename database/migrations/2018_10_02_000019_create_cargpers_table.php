<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargpersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cargpers';

    /**
     * Run the migrations.
     * @table cargpers
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('CargPersID');
            $table->unsignedInteger('cargos_CargosID')->unsigned();
            $table->unsignedInteger('personas_PersonasID')->unsigned();
            $table->date('CargPersFechaInicio')->nullable()->default(null);
            $table->date('CargPersFechaFin')->nullable()->default(null);
            $table->date('CargPersPruebaInicio')->nullable()->default(null);
            $table->date('CargPersPruebaFin')->nullable()->default(null);
            $table->string('CargPersUsuario', 45)->nullable()->default(null);
            $table->dateTime('CargPers_created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('CargPers_updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('CargPersEstado')->nullable()->default('1');

            $table->index(["CargPersID"], 'CargPersID');

            $table->index(["cargos_CargosID"], 'fk_cargpers_cargos1_idx');

            $table->index(["personas_PersonasID"], 'fk_cargpers_personas1_idx');


            $table->foreign('cargos_CargosID', 'fk_cargpers_cargos1_idx')
                ->references('CargosID')->on('cargos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('personas_PersonasID', 'fk_cargpers_personas1_idx')
                ->references('PersonasID')->on('personas')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
