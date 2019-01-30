<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreeStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tree_structures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('parent')->default(1)->nullable()->unsigned();
            $table->timestamps();


            $table->foreign('parent')
                ->references('id')
                ->on('tree_structures')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tree_structures');
    }
}
