<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWishToWishItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wish_items', function (Blueprint $table) {
            $table->unsignedInteger('wish_id');
            $table->foreign('wish_id')->references('id')->on('wishs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wish_items', function (Blueprint $table) {
            $table->dropForeign('wish_items_wish_id_foreign');
        });
    }
}
#php artisan make:migration AddWishToWishItems
