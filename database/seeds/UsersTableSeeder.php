<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'sysmaster',
            'email' => 'andou@parco-city.co.jp',
            'password' => bcrypt('UVv361'),
            'role' => 'admin',
            'store_id' => 1,
            'shop_name' => 'システム管理者',
        ]);
    }
}
