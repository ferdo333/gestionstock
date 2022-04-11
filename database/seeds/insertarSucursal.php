<?php

use Illuminate\Database\Seeder;

class insertarSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        
        for ($i=1; $i <2 ; $i++){
            DB::table('Sucursal')->insert(array(
             'nombre' => 'Providencia',
            'direccion' => 'Miguel Claro',
              'numero_direccion' => '100',
              'comuna' => 'Providencia',
               'region' => 'Metropolitana',
               'pais' => 'Chile',
               'numero_contacto' => '23334455'.$i


            ));
        }
          
          $this->command->info("Sucursal insertada");
    }
}
