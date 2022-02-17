<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('status')->comment('1: В процессе, 2: Ошибка, 3: Успушно')->default(1);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->index('user_id', 'import_status_user_idx');
            $table->foreign('user_id', 'import_status_user_fk')
                ->on('users')
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
        Schema::dropIfExists('import_statuses');
    }
}
