<?php

use Illuminate\Database\Seeder;

class insertarProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insertamos un producto
        for ($i=1; $i <2 ; $i++){
            DB::table('producto')->insert(array(
             'nombre' => 'Polera',
              'id_sucursal' => '1',
              'id_categoria' => '1',
              'descripcion' => 'Polera M , color negro',
               'cantidad' => '2' ,
               'precio' => 15000 .$i


            ));
        }
          
          $this->command->info("Producto insertado");
    }
}
