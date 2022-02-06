<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\DBAL\Types\Type;

class UpdateColumnDeliveryPriceToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('delivery_price');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->double('delivery_price', 12, 2)->default(0)->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('delivery_price');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->double('delivery_price', 8, 2)->default(0)->after('title');
        });
    }
}
