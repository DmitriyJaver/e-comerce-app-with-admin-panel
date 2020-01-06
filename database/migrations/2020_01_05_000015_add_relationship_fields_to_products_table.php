<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('country_id')->nullable();

            $table->foreign('country_id', 'country_fk_826726')->references('id')->on('countries');

            $table->unsignedInteger('color_id')->nullable();

            $table->foreign('color_id', 'color_fk_826743')->references('id')->on('colors');

            $table->unsignedInteger('brand_name_id')->nullable();

            $table->foreign('brand_name_id', 'brand_name_fk_826757')->references('id')->on('brands');
        });
    }
}
