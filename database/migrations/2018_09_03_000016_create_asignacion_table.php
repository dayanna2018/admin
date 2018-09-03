<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'asignacion';

    /**
     * Run the migrations.
     * @table asignacion
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('asigID');
            $table->date('asigDate')->nullable()->default(null);
            $table->timestamp('asig_updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('asig_created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('asigEstado')->nullable()->default('1');
            $table->unsignedInteger('ordenServicio_ordSerID')->unsigned();
            $table->integer('ordenServicio_cliente_cliID');
            $table->unsignedInteger('personas_PersonasID')->unsigned();

            $table->index(["ordenServicio_ordSerID", "ordenServicio_cliente_cliID"], 'fk_asignacion_ordenServicio1_idx');

            $table->index(["personas_PersonasID"], 'fk_asignacion_personas1_idx');


            $table->foreign('ordenServicio_ordSerID', 'fk_asignacion_ordenServicio1_idx')
                ->references('ordSerID')->on('ordenservicio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('personas_PersonasID', 'fk_asignacion_personas1_idx')
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
