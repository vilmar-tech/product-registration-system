<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelProduct;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelProduct $product)
    {
        $product->create([
            'descricao'=>'Mouse',
            'codigo'=>'12344444',
            'price'=>'20',
            'categoria'=>'Informatica',
            'id_user'=>'1',
        ]);

        $product->create([
            'descricao'=>'Biscoito',
            'codigo'=>'12344443',
            'price'=>'5',
            'categoria'=>'Alimentos',
            'id_user'=>'3',
        ]);

        $product->create([
            'descricao'=>'Alto-Falante',
            'codigo'=>'12344445',
            'price'=>'50',
            'categoria'=>'Eletrônicos',
            'id_user'=>'2',
        ]);
    }
}
