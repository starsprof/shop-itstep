<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('composition')->nullable();
            $table->string( 'line')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('height')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('composition');
            $table->dropColumn( 'line');
            $table->dropColumn('color');
            $table->dropColumn('size');
            $table->dropColumn('height');

        });
    }
}
