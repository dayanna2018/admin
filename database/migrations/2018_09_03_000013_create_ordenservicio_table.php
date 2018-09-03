<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenservicioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ordenservicio';

    /**
     * Run the migrations.
     * @table ordenservicio
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ordSerID');
            $table->timestamp('ordSer_created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('ordSer_updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->tinyInteger('ordSerEstado')->nullable()->default('1');
            $table->unsignedInteger('cliente_cliID')->unsigned();

            $table->index(["cliente_cliID"], 'fk_ordenServicio_cliente1_idx');


            $table->foreign('cliente_cliID', 'fk_ordenServicio_cliente1_idx')
                ->references('cliID')->on('cliente')
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
