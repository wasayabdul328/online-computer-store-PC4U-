<?php

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name'=>'AMD SAPPHIRE R9 290 TRI X GRAPHIC CARD',
            'category'=>'Graphic Card',
            'price'=>'19000.00',
            'description'=>'AMD R9 290 in 10/10 condition with box',
            'image'=>'AMD SAPPHIRE R9 290 OC.PNG'

        ],[
            'product_name'=>'MSI Nvidia gt 730 2 gb GDDR5',
            'category'=>'Graphic Card',
            'price'=>'7500.00',
            'description'=>'no problem whatsoever not overclocked and not repaired .Just plug and play. 7 days check waranty.',
            'image'=>'MSI Nvidia gt 730 2 gb GDDR5.PNG'
            
        ],[
            'product_name'=>'8gb ddr3 ram 1600mhz',
            'category'=>'Ram',
            'price'=>'6000.00',
            'description'=>'10/10 condition .totally new',
            'image'=>'ddr3 ram 8gb.PNG'
            
        ],[
            'product_name'=>'SILICON POWER ACE A55 SSD – 1TB',
            'category'=>'SSD',
            'price'=>'15899.99',
            'description'=>'Adopts TLC 3D NAND flash and "SLC Cache technology" to improve overall performance

            15 x faster than a standard 5400 HDD with SATA III 6Gb/s interface
            
            7 mm slim design suitable for ultrabooks and ultra-slim laptops
            
            Supports TRIM command and Garbage Collection technology',
            'image'=>'silicon power ace ssd.PNG'
            
        ],
        [
            'product_name'=>'Samsung evo 850 ssd 250 gb solid state drive',
            'category'=>'SSD',
            'price'=>'8000.00',
            'description'=>'totally new 10/10 condition',
            'image'=>'samsong evo 850 ssd 256 gb.PNG'
            
        ],
        [
            'product_name'=>'Lenovo ThinkVision',
            'category'=>'Monitor',
            'price'=>'12000.00',
            'description'=>'Lenovo ThinkVision T2454pA 24" LCD Monitor IMPORTED FROM UK',
            'image'=>'lenovo 24 inch lcd.PNG'
            
        ],
        [
            'product_name'=>'Hdmi Lcd Monitor',
            'category'=>'Monitor',
            'price'=>'9999.99',
            'description'=>'Asus lcd (hdmi)supported

            27" inch lcd (sealed lcd)
            
            Thr is not a single fault',
            'image'=>'hdmi lcd monitor.PNG'
            
        ],
        [
            'product_name'=>'Dell Optiplex 7060',
            'category'=>'Cpu',
            'price'=>'60000.00',
            'description'=>'8 gb ddr3 ram
            256 gb hard
            intel processor quadcore',
            'image'=>'dell optiplex 7060.PNG'
            
        ],
        [
            'product_name'=>'Dell zeon tech PC',
            'category'=>'Cpu',
            'price'=>'97999.99',
            'description'=>'8gb nvidia graphic card
            8gb ddr3 ram.
            quad core processor',
            'image'=>'dell zeon tech pc.PNG'
            
        ],
        [
            'product_name'=>'Apple iMac 2017 21.5-inch Retina 4K',
            'category'=>'Monitor',
            'price'=>'49999.00',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.',
            'image'=>'Apple iMac 201721.5-inch retina.jpg'
            
        ],
        [
            'product_name'=>'Seagate BarraCuda ST1000DM010 1TB Hard Drive Bare Drive',
            'category'=>'HDD',
            'price'=>'6900.00',
            'description'=>'• Versatile, Fast and Dependable
            • 64MB Cache
            • SATA 6.0Gb/s 3.5"
            • Multi-Tier Caching Technology',
            'image'=>'Seagate BarraCuda ST1000DM010 1TB Hard Drive Bare Drive.PNG'
            
        ],
        );
    }
}
