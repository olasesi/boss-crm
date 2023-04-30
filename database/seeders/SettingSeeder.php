<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('settings')->insert([
            [
            'id'=> 1,
            'name' => 'local_storage_validation',
            'value' => 'jpg,jpeg,png,xlsx,xls,csv,pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 2,
            'name' => 's3_storage_validation',
            'value' => 'jpg,jpeg,png,xlsx,xls,csv,pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 3,
            'name' => 'local_storage_max_upload_size',
            'value' => '2048000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 4,
            'name' => 's3_max_upload_size',
            'value' => '2048000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 5,
            'name' => 'default_language',
            'value' => 'en',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 6,
            'name' => 'color',
            'value' => 'theme-1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 7,
            'name' => 'RTL',
            'value' => 'off',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        
        ]);
       
    }
}