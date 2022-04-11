<?php

use Illuminate\Database\Seeder;

class insertarCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=1; $i <2 ; $i++){
         DB::table('categoria')->insert(array(
           'nombre' => 'Poleras'.$i

         ));
    
       } 
       $this->command->info("Categoría insertada");
    }
}
