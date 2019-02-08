<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgeToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('age_id');
            $table->foreign('age_id')->references('id')->on('ages');
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
            $table->dropForeign('products_age_id_foreign');
        });
    }
}
#https://laravel.com/docs/5.7/migrations#foreign-key-constraints
#php artisan make:migration AddAgeToProducts
#rails g migration AddAgeToProducts franchise:references
