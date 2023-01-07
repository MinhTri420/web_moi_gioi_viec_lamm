<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('posts', function (Blueprint $table) {

            if (Schema::hasColumn(table: 'posts', column: 'remotable')) {
                $table->string('remotable')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'posts', column: 'is_parttime')) {
                $table->string('is_parttime')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'posts', column: 'company_id')) {
                $table->unsignedBigInteger('company_id')->nullable()->change();
            }
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

};
