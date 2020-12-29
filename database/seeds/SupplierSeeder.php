<?php

use App\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'name'=>'Ahmad Baig',
            'address'=>'Allama Iqbal town,Sabzazar,Lahore',
            'phone_no'=>'0320242424',
            'email'=>'ahmadbaig@gmail.com',
        ]);
    }
}
