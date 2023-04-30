<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'id'=> 1,
            'admin_id' => 1,
            'active' => 1,
            'name' => 'olusesi ahmed',
            'email' => 'olusesia@gmail.com',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
        'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 2,
            'admin_id' => 2,
            'active' => 1,
            'name' => 'shola yemi',
            'email' => 'sholayemi@gmail.com',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
        'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 3,
            'admin_id' => 3,
            'active' => 1,
            'name' => 'tunde fola',
            'email' => 'tundefola@gmail.com',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
        'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 4,
            'admin_id' => 3,
            'active' => 0,
            'name' => 'Riley Hagenes',
            'email' => 'kihn.richie@example.net',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
        'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 5,
            'admin_id' => 3,
            'active' => 1,
            'name' => 'Nakia Casper',
            'email' => 'sjacobson@example.org',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
        'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 6,
            'admin_id' => 3,
            'active' => 01,
            'name' => 'Diamond O\'Hara',
            'email' => 'jettie.okon@example.org',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
        'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 7,
            'admin_id' => 3,
            'active' => 1,
            'name' => 'Dr. Miles Lubowitz DDS',
            'email' => 'kulas.willis@example.org',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
            'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 8,
            'admin_id' => 1,
            'active' => 0,
            'name' => 'Dr. Miles LK',
            'email' => 'keas.wil34s@example.org',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
            'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id'=> 9,
            'admin_id' => 2,
            'active' => 0,
            'name' => 'Mike john',
            'email' => 'john.mill@example.org',
            'password' => Hash::make('123456'),
            'user_image' => 'user_avatar.png',
            'user_image_path' => 'images/user_avatar.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
    ]);
    }
}
