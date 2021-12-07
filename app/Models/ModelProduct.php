<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable=['descricao','id_user','codigo','price','categoria'];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User','id','id_user');
        //return $this->hasOne('App\Models\ModelCategory','id','id_product');
    }

    public function relCategorys()
    {
        //return $this->hasOne('App\Models\User','id','id_user');
        return $this->hasMany('App\Models\ModelProduct','id_product');
    }

}
