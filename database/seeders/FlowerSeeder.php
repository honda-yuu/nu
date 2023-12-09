<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            'name' =>'バラ',
            'flower_mean' =>'情熱',
            'money' =>'100',
            'month_id' => 1,
            'image' => 'なし' ,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
            
            
            ]);
    }
}
