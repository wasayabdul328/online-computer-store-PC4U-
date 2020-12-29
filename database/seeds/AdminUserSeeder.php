<?php

use App\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'name'=>'Abdul wasay',
            'email'=>'wasayabdul328@gmail.com',
            'password'=>'$2y$10$AM4QujXwjvgUL2O9kW8uNOHr0U/wByqEa.3BDG.l1F8Djvqf9juYa'
        ],
        [
            'name'=>'Ahmad baig',
            'email'=>'ahmad.baig408@gmail.com',
            'password'=>'$2y$10$JpUiTa/kB5K.E0M1g0o01u7yVZrxK.QtEWS40PPQ0sSnqTReurxwq'
        ]);
    }
}
