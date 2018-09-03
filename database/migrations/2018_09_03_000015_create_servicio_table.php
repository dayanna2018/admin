<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'servicio';

    /**
     * Run the migrations.
     * @table servicio
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('servID');
            $table->integer('servNombre')->nullable()->default(null);
            $table->timestamp('serv_created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('serv_updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('servEstado')->nullable()->default('1');
            $table->unsignedInteger('lineaNegocio_linNegID')->unsigned();
            $table->unsignedInteger('ordenServicio_ordSerID')->unsigned();
            $table->integer('ordenServicio_cliente_cliID');

            $table->index(["ordenServicio_ordSerID", "ordenServicio_cliente_cliID"], 'fk_servicio_ordenServicio1_idx');

            $table->index(["lineaNegocio_linNegID"], 'fk_servicio_lineaNegocio1_idx');


            $table->foreign('lineaNegocio_linNegID', 'fk_servicio_lineaNegocio1_idx')
                ->references('linNegID')->on('lineanegocio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('ordenServicio_ordSerID', 'fk_servicio_ordenServicio1_idx')
                ->references('ordSerID')->on('ordenservicio')
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
