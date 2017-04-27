<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class StoreTableSeeder extends Seeder {

    public function run()
    {
        DB::table('stores')->insert([
            'storename' => '全施設',
            'created_tool_user_id' => 1,
            'updated_tool_user_id' => 1,
        ]);
    }

}