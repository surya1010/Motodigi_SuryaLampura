<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Outlet 1
	    $product1 = Product::create([
								'name'        => 'Nasi Uduk', 
								'description' => 'Nasi Uduk Pagi Pagi', 
								'price'       =>  5000, 
								'category'    => 'Breakfast', 
								'outlet_id'   =>  1
						]);

	    $product2 = Product::create([
								'name'        => 'Lontong Sayur', 
								'description' => 'Lontong Sayur Pagi Pagi', 
								'price'       =>  5000, 
								'category'    => 'Breakfast', 
								'outlet_id'   =>  1
						]);

	    $product3 = Product::create([
								'name'        => 'Nasi Padang', 
								'description' => 'Nasi Padang Wew', 
								'price'       =>  14000, 
								'category'    => 'Lunch', 
								'outlet_id'   =>  1
						]);

	    $product4 = Product::create([
								'name'        => 'Gado Gado', 
								'description' => 'Gado Gado Betawi', 
								'price'       =>  15000, 
								'category'    => 'Lunch', 
								'outlet_id'   =>  1
						]);


	    $product5 = Product::create([
								'name'        => 'Bakso', 
								'description' => 'Bakso Beranak Dua', 
								'price'       =>  5000, 
								'category'    => 'Dinner', 
								'outlet_id'   =>  1
						]);

	    $product6 = Product::create([
								'name'        => 'Ayam Penyet', 
								'description' => 'Ayam Penyet Mampus Pedes Apa Apalah', 
								'price'       =>  5000, 
								'category'    => 'Dinner', 
								'outlet_id'   =>  1
						]);



	    #outlet 2
	    $product7 = Product::create([
								'name'        => 'Indomie', 
								'description' => 'Indomie Murah Meriahh', 
								'price'       =>  3000, 
								'category'    => 'Breakfast', 
								'outlet_id'   =>  2
						]);

	    $product8 = Product::create([
								'name'        => 'Susu', 
								'description' => 'Susu Manisnya ga tahan', 
								'price'       =>  3000, 
								'category'    => 'Breakfast', 
								'outlet_id'   =>  2
						]);

	    $product9 = Product::create([
								'name'        => 'Lontong Balap', 
								'description' => 'Lontong Balap Weenaakk', 
								'price'       =>  12000, 
								'category'    => 'Lunch', 
								'outlet_id'   =>  2
						]);

	    $product10 = Product::create([
								'name'        => 'Tahu Campur', 
								'description' => 'Tahu Campur Aja', 
								'price'       =>  15000, 
								'category'    => 'Lunch', 
								'outlet_id'   =>  2
						]);


	    $product11 = Product::create([
								'name'        => 'Nasi Goreng', 
								'description' => 'Nasi Goreng Ceria', 
								'price'       =>  15000, 
								'category'    => 'Dinner', 
								'outlet_id'   =>  2
						]);

	    $product12 = Product::create([
								'name'        => 'Mie Ayam', 
								'description' => 'Mie Ayam Kampung', 
								'price'       =>  15000, 
								'category'    => 'Dinner', 
								'outlet_id'   =>  2
						]);

	    
        
    }
}
