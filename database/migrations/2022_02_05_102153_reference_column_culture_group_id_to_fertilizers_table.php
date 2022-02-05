<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReferenceColumnCultureGroupIdToFertilizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fertilizers', function (Blueprint $table) {
            $table->index('culture_group_id', 'fertilizer_culture_group_idx');
            $table->foreign('culture_group_id', 'fertilizer_culture_group_fk')
                ->on('culture_groups')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fertilizers', function (Blueprint $table) {
            $table->dropForeign('fertilizer_culture_group_fk');
            $table->dropIndex('fertilizer_culture_group_idx');
        });
    }
}
