<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColorToVariants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('variants', function (Blueprint $table) {
            $table->unsignedInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variants', function (Blueprint $table) {
            $table->dropForeign('variants_color_id_foreign');
        });
    }
}
#https://laravel.com/docs/5.7/migrations#foreign-key-constraints
#php artisan make:migration AddColorToVariants
#rails g migration AddColorToVariants franchise:references