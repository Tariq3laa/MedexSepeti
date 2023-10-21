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
            $table->text('title');
            $table->text('description')->nullable();
            $table->decimal('price', 5, 2)->nullable()->default(0);
            $table->unsignedBigInteger('views')->nullable()->default(0);
            $table->tinyInteger('promoted')->nullable()->default(0);
            $table->unsignedBigInteger('media_id')->nullable();
            $table->timestamps();

            $table->foreign('media_id')
                ->references('id')->on('media')
                ->onDelete('cascade')->onUpdate('cascade');
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
