<?php

namespace Database\Seeders;

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

        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
                array (
                    'created_at' => NULL,
                    'email' => 'fatura@test.com',
                    'email_verified_at' => NULL,
                    'id' => 1,
                    'name' => 'test1',
                    'password' => '123456',
                    'remember_token' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array (
                    'created_at' => NULL,
                    'email' => 'fatura2@test.com',
                    'email_verified_at' => NULL,
                    'id' => 2,
                    'name' => 'fatura2',
                    'password' => '123456',
                    'remember_token' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array (
                    'created_at' => NULL,
                    'email' => 'fatura3@test.com',
                    'email_verified_at' => NULL,
                    'id' => 3,
                    'name' => 'fatura3',
                    'password' => '123456',
                    'remember_token' => NULL,
                    'updated_at' => NULL,
                ),
        ));
    }
}
