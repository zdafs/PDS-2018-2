<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaUrls extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if(Schema::hasColumn('pedidos', 'url')){
            Schema::table('pedidos', function($table){
                $table->dropColumn('url');
            });
        }

        if(!Schema::hasTable('url_pedido')){
            Schema::create('url_pedido', function($table){
                $table->string('url', 200);
                $table->string('email_cliente', 100);
                $table->timestamp('pedido_id');

                $table->foreign(['email_cliente', 'pedido_id'])
                    ->references(['email_cliente', 'pedido_id'])->on('pedidos')
                    ->onDelete('cascade')->onUpdate('cascade');

                $table->primary(['email_cliente', 'pedido_id']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        if(!Schema::hasColumn('pedidos', 'url')){
            Schema::table('pedidos', function($table){
                $table->string('url', 200);
            });
        }

        Schema::dropIfExists('url_pedido');
    }
}
