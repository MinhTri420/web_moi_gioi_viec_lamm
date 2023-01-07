<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            if (Schema::hasColumn(table: 'posts', column: 'district')) {
                $table->string('district')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'posts', column: 'remote')) {
                $table->string('remote')->nullable()->change();
                $table->renameColumn('remote', 'remotable')->nullable();
            }
            if (Schema::hasColumn(table: 'posts', column: 'is_parttime')) {
                $table->string('is_parttime')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'posts', column: 'min_salary')) {
                $table->string('min_salary')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'posts', column: 'max_salary')) {
                $table->string('max_salary')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'posts', column: 'currency_salary')) {
                $table->string('currency_salary')->nullable()->change();
            }
        });


        Schema::table('companies', function (Blueprint $table) {
            if (Schema::hasColumn(table: 'companies', column: 'address')) {
                $table->string('address')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'companies', column: 'address2')) {
                $table->string('address2')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'companies', column: 'address2')) {
                $table->string('address2')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'companies', column: 'district')) {
                $table->string('district')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'companies', column: 'country')) {
                $table->string('country')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'companies', column: 'zipcode')) {
                $table->string('zipcode')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'companies', column: 'phone')) {
                $table->string('phone')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'companies', column: 'email')) {
                $table->string('email')->nullable()->change();
            }
            if (Schema::hasColumn(table: 'companies', column: 'logo')) {
                $table->string('logo')->nullable()->change();
            }
        });


    }


    public function down()
    {
        //
    }
};
