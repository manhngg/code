<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVariantToWishItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wish_items', function (Blueprint $table) {
            $table->unsignedInteger('variant_id');
            $table->foreign('variant_id')->references('id')->on('variants');
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
            $table->dropForeign('wish_items_variant_id_foreign');
        });
    }
}
#php artisan make:migration AddVariantToWishItems
