<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_online', function (Blueprint $table) {
            $table->id();

            $table->string('mpn');            
            $table->float('price');                   
            $table->float('sale_price'); 
            $table->float('vip_price');            
            $table->string('stock');                   
            $table->string('availability');
            $table->string('taglia');            
            $table->string('parent_id');                   
            $table->string('title'); 
            $table->string('description');            
            $table->string('link');                   
            $table->string('image_link');
            $table->string('product_type');
            $table->string('eta');            
            $table->string('marche');                   
            $table->string('genere'); 
            $table->string('personaggi');            
            $table->string('colore');                   
        

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
        Schema::dropIfExists('store_online');
    }
}
