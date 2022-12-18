<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('users', function (Blueprint $table) {
                if (Schema::hasColumn(table: 'users', column: 'password')) {
                $table->string('password')->nullable()->change();
            }
                if (Schema::hasColumn(table: 'users', column: 'city')) {
                $table->string('city')->nullable()->change();
            }
                if (Schema::hasColumn(table: 'users', column: 'company_id')) {
                $table->unsignedBigInteger('company_id')->nullable()->change();
            }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
