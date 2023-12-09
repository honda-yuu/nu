<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('months')->insert([
            'month' => '1月',
            ]);
        
        DB::table('months')->insert([
            'month' => '1月',
            ]);
            
        DB::table('months')->insert([
            'month' => '2月',
            ]);
            
        DB::table('months')->insert([
            'month' => '3月',
            ]);
            
        DB::table('months')->insert([
            'month' => '4月',
            ]);
            
        DB::table('months')->insert([
            'month' => '5月',
            ]);
            
        DB::table('months')->insert([
            'month' => '6月',
            ]);
            
        DB::table('months')->insert([
            'month' => '7月',
            ]);
            
        DB::table('months')->insert([
            'month' => '8月',
            ]);
            
        DB::table('months')->insert([
            'month' => '9月',
            ]);
            
        DB::table('months')->insert([
            'month' => '10月',
            ]);
            
        DB::table('months')->insert([
            'month' => '11月',
            ]);
            
        DB::table('months')->insert([
            'month' => '12月',
            ]);
            
        DB::table('months')->insert([
            'month' => 'その他,'
            ]);    
    }
}
