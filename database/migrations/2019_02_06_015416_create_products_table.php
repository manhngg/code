<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('description_h5');
            $table->text('description_p');
            $table->text('specifications');
            $table->text('care');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

#php artisan make:migration create_products_table
#php artisan make:migration create_productss_table --create=products
#php artisan make:migration create_productss_table --table=products
#bin/rails generate migration CreateProducts
