<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erecords', function (Blueprint $table) {
            $table->id();
            $table->string('asset_name');
            $table->string('brand');
            $table->string('serial_no');
            $table->text('description')->nullable();
            $table->enum('status',['Working','Damaged'])->default('Working');
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
        Schema::dropIfExists('erecords');
    }
}
