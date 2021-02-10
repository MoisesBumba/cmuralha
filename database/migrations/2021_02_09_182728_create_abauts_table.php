<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbautsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abauts', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('title', 250)->unique();
            $table->text('description');
            $table->string('image', 200);
            $table->enum('status', ['A', 'R'])->default('A')->comment('A-> Ativar postado. R -> Rascumho, não mostrar');
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
        Schema::dropIfExists('abauts');
    }
}
