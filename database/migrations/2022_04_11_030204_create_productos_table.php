<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE producto(
            id_producto int(11) auto_increment not null ,
            nombre varchar(50) not null, 
            id_sucursal int(11) not null,
            id_categoria int(11) not null,
            descripcion varchar(50) not null,
            cantidad int not null,
            precio int not null,
            primary key(id_producto)
           

        )');




    }

 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
