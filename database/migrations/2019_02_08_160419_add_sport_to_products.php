<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSportToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('sport_id');
            $table->foreign('sport_id')->references('id')->on('sports');
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
            $table->dropForeign('products_sport_id_foreign');
        });
    }
}
#https://laravel.com/docs/5.7/migrations#foreign-key-constraints
#php artisan make:migration AddSportToProducts
#rails g migration AddSportToProducts sport:references