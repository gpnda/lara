<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('partnum');                  // Артикул
            $table->integer('category_id')->index();    // ID категории
            $table->integer('brand_id')->index();       // ID бренда
            $table->float('price', 8, 2);               // Цена типа 100.00
            $table->integer('currency_id')->index();    // ID валюты
            $table->integer('stock_id')->index();       // ID наличия в наличии/под заказ/снят
            $table->string('shortdescr');               // краткое описание
            $table->longText('fulldescr');              // полное описание
            $table->string('picfilename');              // имя файла картинки
            $table->boolean('isnew');                   // флажок Новинка
            $table->boolean('ishot');                   // флажок горячее предложение
            $table->integer('ordernum');                 // порядок следования, может пригодиться для любой сущности
            $table->boolean('available');               // доступность, фактически включить/выключить, может пригодиться для любой сущности
            $table->timestamps();                       // Лара так добавляет два поля created_at и updated_at
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
