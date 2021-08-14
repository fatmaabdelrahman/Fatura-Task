<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Super Admin',
                    'guard_name' => 'web',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));

    }
}
