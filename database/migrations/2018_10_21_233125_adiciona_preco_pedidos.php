<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaPrecoPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if(!Schema::hasColumn('pedidos', 'preco')){
              Schema::table('pedidos', function($table){
                $table->decimal('preco', 8, 2);
              });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        if(Schema::hasColumn('pedidos', 'preco')){
              Schema::table('pedidos', function($table){
                $table->dropColumn('preco');
              });
        }
    }
}
