<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            [
            'name'=>'Apple',
            'price'=>'500',
            'category'=>'Mobiles',
            'gallery'=>'https://images.unsplash.com/photo-1589492477829-5e65395b66cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bW9iaWxlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'description'=>'A smart phone with a great Mediatek helio processor'

            ],
           [
            'name'=>'LG',
            'price'=>'200',
            'category'=>'Mobiles',
            'gallery'=>'https://images.unsplash.com/photo-1587749090881-1ea18126ab3a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bW9iaWxlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'description'=>'A smart phone with a great processor and Ram '

            ],

        [

                'name'=>'Moto',
                'price'=>'300',
                'category'=>'Mobiles',
                'gallery'=>'https://images.unsplash.com/photo-1547658718-f4311ad64746?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fG1vYmlsZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
                'description'=>'A smart phone with a great snapdragon  processor'
    
            ],
        




    ]);
}
}