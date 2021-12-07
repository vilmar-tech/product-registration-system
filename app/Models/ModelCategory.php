<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    use HasFactory;
    protected $table='category';

    public function relProduct()
{
    return $this->hasOne('App\Models\ModelCategory','id','id_product');
}

}
