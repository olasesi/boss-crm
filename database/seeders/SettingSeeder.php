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
       
            DB::table('settings')->insert([[
                'id'=> 1,
                'name' => 'title_text',
                'value' => 'Boss CRM',
                'admin_id' =>1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
            'id'=> 2,
            'name' => 'local_storage_validation',
            'value' => 'jpg,jpeg,png,xlsx,xls,csv,pdf',
            'admin_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 3,
            'name' => 's3_storage_validation',
            'value' => 'jpg,jpeg,png,xlsx,xls,csv,pdf',
            'admin_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 4,
            'name' => 'local_storage_max_upload_size',
            'value' => '2048000',
            'admin_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 5,
            'name' => 's3_max_upload_size',
            'value' => '2048000',
            'admin_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 6,
            'name' => 'default_language',
            'value' => 'en',
            'admin_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 7,
            'name' => 'color',
            'value' => 'theme-1',
            'admin_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 8,
            'name' => 'RTL',
            'value' => 'off',
            'admin_id' =>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        
        ]);
       
    }
}