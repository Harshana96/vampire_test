<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2); // price with two decimal places
            $table->integer('stock'); // quantity available in stock
            $table->timestamps(); // created_at and updated_at fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
