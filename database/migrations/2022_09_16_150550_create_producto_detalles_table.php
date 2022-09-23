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
        Schema::create('producto_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPedido')->constrained('pedidos');
            $table->foreignId('idUser')->constrained('users');
            $table->foreignId('idProducto')->constrained('productos');
            $table->double('precio',12,2);
            $table->integer('cantidad')->default(1);
            $table->double('precioTotal',12,2);
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
        Schema::dropIfExists('producto_detalles');
    }
};
