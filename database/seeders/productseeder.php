<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            'name' => 'Hawei mate10',
            "price" => "21000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://www.notebookcheck.net/uploads/tx_nbc2/4_zu_3_teaser_Huawei_Mate_10_Pro_Blue_Front_and_Back.jpg" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Hawei nova7',
            "price" => "23000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://www.gizmochina.com/wp-content/uploads/2020/01/nova-7i.jpg" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Hawei p13',
            "price" => "26000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://images-na.ssl-images-amazon.com/images/I/51zDfRUUhHL._AC_SX522_.jpg" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Hawei nova5',
            "price" => "28000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://cnet2.cbsistatic.com/img/Dhqu2iCY13xFiT1Ww79LBbGbZrI=/940x0/2019/06/21/3d2d4603-35bf-47f4-8ed8-1db195eb646c/hauwei-nova-5-green.jpg" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Hawei Y6prime',
            "price" => "31000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://www.powerplanetonline.com/cdnassets/funda_de_silicona_huawei_y6p_01_transparente_l.jpg" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Hawei p14 prime',
            "price" => "22000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://cdn.alzashop.com/ImgW.ashx?fd=f3&cd=HU3145b2" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Hawei p14 prime',
            "price" => "22000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://cdn.alzashop.com/ImgW.ashx?fd=f3&cd=HU3145b2" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Hawei p14 prime',
            "price" => "22000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://cdn.alzashop.com/ImgW.ashx?fd=f3&cd=HU3145b2" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Hawei p14 prime',
            "price" => "22000",
           "description" => "A smartphone with 4gb ram and 16px",
           "category"=> "mobile",
           "gallery" =>"https://cdn.alzashop.com/ImgW.ashx?fd=f3&cd=HU3145b2" 
        ]

        );
        DB::table('product')->insert([
            'name' => 'Samsung Led',
            "price" => "212000",
           "description" => "A smart Led",
           "category"=> "mobile",
           "gallery" =>"https://www.bhphotovideo.com/images/images2500x2500/samsung_un32n5300afxza_n5300_series_32_smart_1395974.jpg" 
        ]

        );
        DB::table('product')->insert([
            'name' =>'Samsung Led',
            "price" => "282000",
           "description" => "A smart Led",
           "category"=> "mobile",
           "gallery" =>"https://infinitivekart.com/media/catalog/product/cache/1/small_image/9df78eab33525d08d6e5fb8d27136e95/i/n/infinitive_tv_6.png" 
        ]

        );

    }
}
