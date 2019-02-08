<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProducttypeToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('producttype_id');
            $table->foreign('producttype_id')->references('id')->on('producttypes');
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
            $table->dropForeign('products_producttype_id_foreign');
        });
    }
}
#https://laravel.com/docs/5.7/migrations#foreign-key-constraints
#php artisan make:migration AddProducttypeToProducts
#rails g migration AddProducttypeToProducts franchise:references