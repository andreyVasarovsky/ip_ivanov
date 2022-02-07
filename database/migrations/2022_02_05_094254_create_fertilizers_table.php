<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFertilizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fertilizers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->double('nitrogen_norm', 8, 2)->default(0);
            $table->double('phosphorus_norm', 8, 2)->default(0);
            $table->double('potassium_norm', 8, 2)->default(0);
            $table->unsignedBigInteger('culture_group_id')->nullable();
            $table->string('district')->nullable();
            $table->double('price', 8, 2)->default(0);
            $table->string('desc')->nullable();
            $table->string('purpose')->nullable();
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
        Schema::dropIfExists('fertilizers');
    }
}
