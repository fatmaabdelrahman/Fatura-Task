<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->delete();

        \DB::table('admins')->insert(array (
            0 =>
                array (
                    'created_at' => '2021-06-26 23:02:03',
                    'email' => 'admin@admin.com',
                    'id' => 1,
                    'name' => 'admin',
                    'password' => '123456',
                    'remember_token' => NULL,
                    'updated_at' => '2021-06-26 23:03:20',
                ),
        ));

    }
}
