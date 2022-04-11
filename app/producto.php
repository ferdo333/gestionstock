<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $primarykey =  'id_producto';

  public function categoria(){
     return $this->belongsTo('App\categoria','id_categoria');
    
    }
    public function sucursal(){
        return $this->belongsTo('App\sucursal','id_sucursal');
       
       }


}


