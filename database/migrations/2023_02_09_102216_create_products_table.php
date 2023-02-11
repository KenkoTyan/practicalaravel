<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //FK с моделью category
            $table->foreignId("category_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("name");
            $table->decimal("price", $precision = 8, $scale = 2);
            /* характеристики товара */
            $table->string("prod_country");
            $table->year("prod_year");
            $table->string("prod_model");
            $table->integer("amount");
            /* картинки может и не быть к примеру */
            $table->text("thumbnail")->nullable();
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
};
