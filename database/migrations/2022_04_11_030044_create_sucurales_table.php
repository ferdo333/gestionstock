<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucuralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE sucursal(
            id_sucursal int(11) auto_increment not null ,
            nombre varchar(50)not null,
            direccion varchar(50)not null,
            numero_direccion int (11) not null, 
            comuna varchar(50) not null,
            region varchar(50) not null,
            pais varchar(50) not null,
            numero_contacto varchar(12) not null,
            primary key(id_sucursal)
            

        )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursales');
    }
}
