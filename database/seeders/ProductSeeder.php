<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_product = [
            [
                'merek'=>'ROBUSTA',
                'product_name'=>'KOPI ENAK',
                'rating'=>'5',
                'price'=>200000,
                'origin'=>'Aceh',
                'species'=>'Arabika',
                'roast_lavel'=>'Light Rose',
                'tasted'=>'Sweet',
                'processing'=>'Natureal',
            ],
            [
                'merek'=>'ROBUSTA 2',
                'product_name'=>'KOPI ENAK',
                'rating'=>'5',
                'price'=>200000,
                'origin'=>'Semarang',
                'species'=>'Robusta',
                'roast_lavel'=>'Dark Roast',
                'tasted'=>'Cocoa',
                'processing'=>'Spices',
            ],
            [
                'merek'=>'ROBUSTA',
                'product_name'=>'ABID CLEVER DRIPPER 102',
                'rating'=>'5',
                'price'=>200000,
                'origin'=>'Aceh',
                'species'=>'Arabika',
                'roast_lavel'=>'Light Rose',
                'tasted'=>'Sweet',
                'processing'=>'Natureal',
            ],
            [
                'merek'=>'ROBUSTA 2',
                'product_name'=>'Aceh Gayo Coffee Beans...',
                'rating'=>'5',
                'price'=>200000,
                'origin'=>'Semarang',
                'species'=>'Robusta',
                'roast_lavel'=>'Dark Roast',
                'tasted'=>'Cocoa',
                'processing'=>'Spices',
            ],
            [
                'merek'=>'ROBUSTA',
                'product_name'=>'Almond Biscuit',
                'rating'=>'5',
                'price'=>200000,
                'origin'=>'Aceh',
                'species'=>'Arabika',
                'roast_lavel'=>'Light Rose',
                'tasted'=>'Sweet',
                'processing'=>'Natureal',
            ],
            [
                'merek'=>'ROBUSTA 2',
                'product_name'=>'Ciwidey West Java Frinsa ...',
                'rating'=>'5',
                'price'=>200000,
                'origin'=>'Semarang',
                'species'=>'Robusta',
                'roast_lavel'=>'Dark Roast',
                'tasted'=>'Cocoa',
                'processing'=>'Spices',
            ],
        ];


        foreach ($array_product as $item) {
           $result =  \App\Models\Product::create($item);
           if($result) {
            for ($i=0; $i < 3; $i++) {
                \App\Models\ProductImage::create([
                     'product_id' => $result->id,
                     'path' => 'https://awsimages.detik.net.id/community/media/visual/2022/01/02/manfaat-kopi_169.jpeg?w=1200',
                     'name' => 'Kopi Nikmat'
                ]);
            }
           }
        }
    }
}
