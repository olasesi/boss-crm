<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([[
            'id'=> 1,
            'name' => 'website name',
            'value' => 'Boss CRM',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 2,
            'name' => 'logo',
            'value' => 'v1/images/logo/logo.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 3,
            'name' => 'meta description',
            'value' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        ]

    );
    }
}
